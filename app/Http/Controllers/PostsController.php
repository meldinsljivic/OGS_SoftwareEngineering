<?php

namespace App\Http\Controllers;
use App\View;
use App\Posts;
use App\Cart; 
use App\Product;
use App\Order;
use Illuminate\Http\Request;
use Session;
use Auth;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
class PostsController extends Controller
{
    public function getPosts(){

        $posts = Posts::all();
        return view('shop.blog', ['posts' => $posts]);
    }
  
    public function getPostSingle($slug){
        $post = Posts::whereSlug($slug)->first();
        return view('shop.post', ['post' => $post]);
    }
    
    
}
