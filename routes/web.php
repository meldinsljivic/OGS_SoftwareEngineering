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

Route::get('/register', function () {
    return view('shop.register');
});

Route::get('/account', function () {
    return view('user.account');
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

