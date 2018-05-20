<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]
);
Route::get('/error', function () {
    return view('shop.404');
});

Route::get('/basket', function () {
    return view('shop.basket');
});

Route::get('/blog', function () {
    return view('shop.blog');
});

Route::get('/category', function () {
    return view('shop.category');
});

Route::get('/contact', function () {
    return view('shop.contact');
});

Route::get('/detail', function () {
    return view('shop.detail');
});

Route::get('/faq', function () {
    return view('shop.faq');
});

Route::get('/post', function () {
    return view('shop.post');
});


Route::get('/order', function () {
    return view('user.order');
});

Route::get('/orders', function () {
    return view('user.orders');
});

Route::get('/wishlist', function () {
    return view('user.wishlist');
});

Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', [
        'uses' => 'userController@getSignup',
        'as' => 'shop.register'        
    ]);
    
    Route::post('/register',[
        'uses' => 'userController@postSignup',
        'as' => 'shop.register'        
    ]);
    Route::get('/login', [
        'uses' => 'userController@getSignin',
        'as' => 'shop.login'       
    ]);
    
    Route::post('/login',[
        'uses' => 'userController@postSignin',
        'as' => 'shop.login'
    ]);
});


Route::group(['middleware' => 'auth'], function(){
    Route::get('/account', [
        'uses' => 'userController@getProfile',
        'as' => 'user.account'
    ]);
    
    Route::get('/logout', [
        'uses' => 'userController@getLogout',
        'as' => 'user.logout'
    ]);
});

Route::get('/add-to-cart/{id}', [
    'uses'=> 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/cart', [
    'uses'=> 'ProductController@getCart',
    'as' => 'product.cart'
]);