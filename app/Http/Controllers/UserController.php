<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Order;
use Auth;
use Session;
class UserController extends Controller
{
    public function getSignup(){
        return view('shop.register');
    }

    public function postSignup(Request $request){
        $this->validate($request, [
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = new User([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();

        if(Session::has('oldUrl')){
            $oldUrl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);
        }

        return redirect()->route('product.index');
    }

    public function getSignin(){
        return view('shop.login');
    }

    public function postSignin(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])){
            if(Session::has('oldUrl')){
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }
            return redirect()->route('user.account');
        }
        else{
            return redirect()->route('user.signin');
        }    
           
    }

    public function getProfile(){
      
        return view('user.account');
    }
    public function getOrders(){
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('user.orders', ['orders' => $orders]);
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('product.index');
    }
}
