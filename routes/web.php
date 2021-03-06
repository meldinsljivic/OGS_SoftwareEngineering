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
    Route::post('/wishlist',[
        'uses' => 'ProductController@postWishlist',
        'as' => 'shop.wishlist'        
    ]);
    Route::get('/wishlist', [
        'uses' => 'ProductController@getWishlist',
        'as' => 'shop.wishlist'
    ]
    );
   
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
    Route::get('/addPost', [
        'uses' => 'ProductController@getAddPost',
        'as' => 'shop.addPost',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]
    );
    Route::post('/addPost',[
        'uses' => 'ProductController@postAddPost',
        'as' => 'shop.addPost',
        'middleware' => 'roles',
        'roles' => ['Admin']      
    ]);

    Route::get('/addProduct', [
        'uses' => 'ProductController@getAddProduct',
        'as' => 'shop.addProduct',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]
    );
    Route::post('/addProduct',[
        'uses' => 'ProductController@postAddProduct',
        'as' => 'shop.addProduct',
        'middleware' => 'roles',
        'roles' => ['Admin']       
    ]);
    Route::get('/listProducts', [
        'uses' => 'ProductController@getListProducts',
        'as' => 'shop.listProduct',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]
    );
    Route::get('/deleteListProduct/{id}', [
        'uses' => 'ProductController@getDeleteListProduct',
        'as' => 'shop.deleteListProduct',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]
    );
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

Route::get('/listPosts', [
    'uses' => 'PostsController@getListPosts',
    'as' => 'shop.listPosts'
]
);
Route::get('/deleteListPost/{id}', [
    'uses' => 'PostsController@getDeleteListPosts',
    'as' => 'shop.deleteListPost'
]
);



