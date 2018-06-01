<?php

namespace App\Http\Controllers;
use App\Posts;
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
        $products = Product::orderBy('id', 'DESC')->get();
        return view('shop.index', ['products' => $products, 'categories' => $categories]);
    }
    public function getListProducts(){
        
        $products = Product::orderBy('id', 'DESC')->get();
        return view('shop.listProducts', ['products' => $products]);
    }
    public function getDeleteListProduct($id)
    {

        Product::where('id', $id)->delete();

        return redirect()->route('shop.listProduct');

    }
    public function getAddPost(){
        
        return view('shop.addPost');
    }
    public function getAddProduct(){
        $categories=Category::all();
        return view('shop.addProduct', ['categories' => $categories]);
    }
    public function postAddProduct(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'youtube' => 'required',
            'description' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'image3' => 'required',
            'category_id' => 'required'
            
            
        ]);

        $product = new Product([
            'title' => $request->input('title'),
            'price' => $request->input('price'),
            'youtube' => $request->input('youtube'),
            'description' => $request->input('description'),
            'image1' => $request->input('image1'),
            'image2' => $request->input('image2'),
            'image3' => $request->input('image3'),
            'category_id' => $request->input('category_id')
            
            
        ]);
        $product->save();

        if(Session::has('oldUrl')){
            $oldUrl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);
        }

        return redirect()->route('product.index');
    }
    public function postAddPost(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'image' => 'required'
            
        ]);

        $post = new Posts([
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'description' => $request->input('description'),
            'image' => $request->input('image')
            
        ]);
        $post->save();

        if(Session::has('oldUrl')){
            $oldUrl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);
        }

        return redirect()->route('shop.blog');
    }
    public function getCategory(){

        $products = Product::orderBy('id', 'DESC')->get();
        return view('shop.category', ['products' => $products]);
    }
    public function getProductSingle($id){
        $product = Product::whereId($id)->first();
        $categories=Category::all();
        return view('shop.detail', ['product' => $product, 'categories' => $categories]);
    }
    public function getWishlist(){
        $wishlists = Wishlist::orderBy('id', 'DESC')->get();
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

        return redirect()->route('shop.detail', $request->input('id_product'));
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
