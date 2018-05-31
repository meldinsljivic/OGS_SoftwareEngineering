<?php

namespace App\Http\Controllers;
use App\Wishlist;
use App\Cart; 
use App\Category;
use App\Product;
use App\Order;
use Illuminate\Http\Request;
use Session;
use Auth;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
class ProductController extends Controller
{
    public function getIndex(){
        $categories=Category::all();
        $products = Product::all();
        return view('shop.index', ['products' => $products, 'categories' => $categories]);
    }
    public function getCategory(){

        $products = Product::all();
        return view('shop.category', ['products' => $products]);
    }
    public function getProductSingle($id){
        $product = Product::whereId($id)->first();
        $categories=Category::all();
        return view('shop.detail', ['product' => $product, 'categories' => $categories]);
    }
    public function getWishlist(){
        $wishlists = Wishlist::all();
        $products = Product::all();
        return view('user.wishlist', ['products' => $products, 'wishlists' => $wishlists]);
    }
    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);

        return redirect()->route('product.index');
    }

  

    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        
        Session::put('cart', $cart);
        return redirect()->route('product.cart');
    }
    public function postWishlist(Request $request){
        $this->validate($request, [
            'id_product' => 'required',
            'id_user' => 'required'
            
        ]);

        $wishlist = new Wishlist([
            'id_product' => $request->input('id_product'),
            'id_user' => $request->input('id_user')
            
        ]);
        $wishlist->save();

        if(Session::has('oldUrl')){
            $oldUrl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);
        }

        return redirect()->route('product.index');
    }
    public function getRemoveItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        Session::put('cart', $cart);
        return redirect()->route('product.cart');
    }

    public function getIncreaseByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->increaseByOne($id);

        Session::put('cart', $cart);
        return redirect()->route('product.cart');
    }

    public function getCart(){
        if(!Session::has('cart')){
            return view('shop.basket');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.basket', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout(){
        if(!Session::has('cart')){
            return view('shop.basket');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request){
        if(!Session::has('cart')){
            return redirect()->route('product.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_v5brlZJtEYcGuE5m2GL0WUOP');
        try{
           
            $charge = Charge::create(array(
            "amount" => $cart->totalPrice * 100,
            "currency" => "usd",
            "source" => $request->input('stripeToken'),
            "description" => "Charge for test@mail.com",
            
        ));
        $order = new Order();
        $order->cart = serialize($cart);
        $order->address = $request->input('address');
        $order->name = $request->input('name');
        $order->payment_id = $charge->id;

        Auth::user()->orders()->save($order);

        } catch(\Exception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }

        Session::forget('cart');
        return redirect()->route('product.index')->with('success', 'Successfully purchased products!');
    }
}
