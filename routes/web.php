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
Route::get('/category', [
    'uses' => 'CategoriesController@index',
    'as' => 'category.category'
]
);

Route::get('/post/{slug}', [
    'uses' => 'PostsController@getPostSingle',
    'as' => 'shop.posts'
]
);
Route::get('/blog', [
    'uses' => 'PostsController@getPosts',
    'as' => 'shop.blog'
]
);
Route::get('/detail/{id}', [
    'uses' => 'ProductController@getProductSingle',
    'as' => 'shop.detail'
]
);
Route::resource('category','CategoriesController');
Route::get('/error', function () {
    return view('shop.404');
});

Route::get('/basket', function () {
    return view('shop.basket');
});



Route::get('/contact', function () {
    return view('shop.contact');
});



Route::get('/faq', function () {
    return view('shop.faq');
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
    Route::get('/checkout', [
        'uses'=> 'ProductController@getCheckout',
        'as' => 'checkout'
    ]);
    
    Route::post('/checkout', [
        'uses'=> 'ProductController@postCheckout',
        'as' => 'checkout'
    ]);
    Route::get('/orders', [
        'uses' => 'userController@getOrders',
        'as' => 'user.orders'
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

Route::get('/reduce/{id}', [
    'uses'=> 'ProductController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);

Route::get('/increase/{id}', [
    'uses'=> 'ProductController@getIncreaseByOne',
    'as' => 'product.increaseByOne'
]);

Route::get('/remove/{id}', [
    'uses'=> 'ProductController@getRemoveItem',
    'as' => 'product.removeItem'
]);



