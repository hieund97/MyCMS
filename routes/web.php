<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;


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

/**
 * Admin Zone
 */

Route::group([
    'prefix' => 'admin',
    'namespace' => 'admin'
], function () {
    Route::get('register', 'RegisterController@register');
    Route::post('/register', 'RegisterController@store');
    Route::group([
        'middleware' => 'guest'
    ], function () {
        Route::get('login', "LoginController@showLoginForm");
        Route::post('login', "LoginController@login");
    });

    Route::group([
        'middleware' => 'auth'
    ], function () {
        Route::get('/', 'DashboardController@index');
        Route::post('logout', 'LoginController@logout');

        // Admin User Route
        Route::group([
            'prefix' => 'user'
        ], function () {
            Route::get('{user}/edit', 'UserController@edit');
            Route::get('/', 'UserController@index');
            Route::get('/create', 'UserController@create');
            Route::post('/', 'UserController@store');
            Route::put('{user}', 'UserController@update');
            Route::delete('{user}', 'UserController@destroy');
        });

        // Admin Product Route
        Route::group([
            'prefix' => 'products'
        ], function () {
            //product
            Route::get('/', 'ProductController@index');
            Route::get('/create', 'ProductController@create');
            Route::get('/{product}/edit', 'ProductController@edit');
            Route::put('/{product}/edit', 'ProductController@update');
            Route::delete('/{product}/delete', 'ProductController@destroy');
            Route::post('/', 'ProductController@store');

            //price
            Route::get('/price/{product}/edit', 'ProductController@editprice');
            Route::put('/price/{product}/edit', 'ProductController@updateprice');

            //value
            Route::get('/value', 'ProductController@value');

            //variant
            Route::delete('/price/{variant}/delete', 'ProductController@destroyvariant');

            //brand
            Route::get('/brand', 'ProductController@brand');
            Route::get('/brand/{brand}/edit', 'ProductController@editbrand');
            Route::post('/brand', 'ProductController@addbrand');
            Route::put('/brand/{brand}/edit', 'ProductController@updatebrand');
            Route::delete('/brand/{brand}/delete', 'ProductController@destroybrand');

            //image
            Route::get('/image/{product}/add', 'ProductController@image');
            Route::get('/image/{product}/edit', 'ProductController@editimage');
            Route::post('/image/add', 'ProductController@addimage');
            Route::put('/image/{product}/update', 'ProductController@updateimage');
        });

        // Admin Product-Category Route
        Route::group([
            'prefix' => 'categories'
        ], function () {
            Route::get('/', 'CategoryController@index');
            Route::get('/create', 'CategoryController@create');
            Route::get('{category}/edit', 'CategoryController@edit');
            Route::put('{category}/edit', 'CategoryController@update');
            Route::post('/', 'CategoryController@store');
            Route::delete('{categories}/delete', 'CategoryController@destroy');
        });

        // Admin Blog Route
        Route::group([
            'prefix' => 'blog'
        ], function () {
            Route::get('/', 'BlogController@index');
            Route::get('create', 'BlogController@create');
            Route::get('{blog}/edit', 'BlogController@edit');
            Route::put('{blog}/edit', 'BlogController@update');
            Route::post('/', 'BlogController@store');
            Route::delete('{blog}/delete', 'BlogController@destroy');
        });

        // Admin Blog-Category Route
        Route::group([
            'prefix' => 'blog-category'
        ], function () {
            Route::get('/', 'Blog_CategoryController@index');
            // Route::get('/create', 'Blog_CategoryController@create');
            Route::post('/', 'Blog_CategoryController@store');
            Route::get('{blog_category}/edit', 'Blog_CategoryController@edit');
            Route::put('{blog_category}/edit', 'Blog_CategoryController@update');
            Route::delete('{blog_category}/delete', 'Blog_CategoryController@destroy');
        });

        // Admin Attribute Route
        Route::group([
            'prefix' => 'attribute'
        ], function () {
            Route::post('/', 'AttributeController@store');
            Route::get('{attribute}/edit', 'AttributeController@edit');
            Route::put('{attribute}/edit', 'AttributeController@update');
            Route::delete('{attribute}/delete', 'AttributeController@destroy');
        });

        // Admin Value Route
        Route::group([
            'prefix' => 'value'
        ], function () {
            Route::post('/', 'ValueController@store');
            Route::get('{value}/edit', 'ValueController@edit');
            Route::put('{value}/edit', 'ValueController@update');
            Route::delete('{value}/delete', 'ValueController@destroy');
        });

        // Admin Slider Route
        Route::group([
            'prefix' => 'slider'
        ], function () {
            Route::get('/', 'SliderController@index');
            Route::get('/create', 'SliderController@create');
            Route::get('/{slider}/edit', 'SliderController@edit');
            Route::post('/', 'SliderController@store');
            Route::put('/{slider}/edit', 'SliderController@update');
            Route::delete('/{slider}/delete', 'SliderController@destroy');
        });

        // Admin Subcribe Route
        Route::group([
            'prefix' => 'subcribe'
        ], function () {
            Route::get('/', 'SubcribeController@index');
            Route::delete('/{subcribe}/delete', 'SubcribeController@destroy');
        });

        // Admin Contact Route
        Route::group([
            'prefix' => 'contact'
        ], function () {
            Route::get('/', 'ContactController@index');
            Route::delete('/{contact}/delete', 'ContactController@destroy');
        });


        // Admin Order Route
        Route::group([
            'prefix' => 'order'
        ], function () {
            Route::get('/', 'OrderController@index');
            Route::put('/cancel/{id}','OrderController@cancel');
            Route::get('/{id}/edit','OrderController@edit');
            Route::post('/{id}/edit','OrderController@update');
        });


        // Admin Ship Method Route
        Route::group([
            'prefix' => 'ship-method'
        ], function () {
            Route::get('/', 'ShipMethodController@index');
            Route::post('/', 'ShipMethodController@store');
            Route::get('/{ship_method}/edit', 'ShipMethodController@edit');
            Route::put('/{ship_method}/edit', 'ShipMethodController@update');
            Route::delete('/{ship_method}/delete', 'ShipMethodController@destroy');
        });

        // Admin Ship Method Route
        Route::group([
            'prefix' => 'pay-method'
        ], function () {
            Route::get('/', 'PayMethodController@index');
            Route::post('/', 'PayMethodController@store');
            Route::get('/{payment_method}/edit', 'PayMethodController@edit');
            Route::put('/{payment_method}/edit', 'PayMethodController@update');
            Route::delete('/{payment_method}/delete', 'PayMethodController@destroy');
        });
    });
});

// CK finder
// Route::any('/ckfinder/examples/{example?}', 'CKSource\CKFinderBridge\Controller\CKFinderController@examplesAction')
//     ->name('ckfinder_examples');



/**
 * CLient Zone
 */

Route::group([
    'namespace' => 'Client'
], function () {
    // Client Home Route
    Route::get('/', 'HomeController@index');
    Route::get('/thong-tin', 'HomeController@about');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout');
    Route::post('/register', 'RegisterController@store');
    Route::get('/ho-tro-khach-hang', 'HomeController@support');

    // test Route
    Route::post('/test', 'HomeController@test');

    //  Client Blog Route
    Route::group([
        'prefix' => 'bai-viet'
    ], function () {
        Route::get('/', 'BlogController@index');
        Route::get('/{slug}', 'BlogController@articles');
        Route::get('/danh-muc/{b_cate_slug}', 'BlogController@category');
    });


    // Client Product Route
    Route::group([
        'prefix' => 'san-pham'
    ], function () {
        Route::get('/', 'ProductController@index');
        Route::get('/{p_slug}', 'ProductController@item');
        Route::get('/loc-san-pham', 'ProductController@filter');
    });

    // Client Filter Product
    Route::get('/loc-san-pham', 'ProductController@filter');


    // Client Blog Category Route
    // Route::get('{b_cate_slug}', 'Blog_CategoryController@index');


    // Client Categories Route
    Route::group([
        'prefix' => 'danh-muc'
    ], function () {
        Route::get('/{p_cate_slug}', 'CategoryController@category');
    });

    // Client User Route
    Route::group([
        'prefix' => 'thanh-vien'
    ], function () {
        Route::get('/uu-dai', 'HomeController@member');
        Route::get('/{slug}', 'UserController@detail');
        Route::put('{slug}', 'UserController@update');
        Route::get('/{slug}/doi-mat-khau', 'UserController@updatepass');
        Route::put('/{slug}/doi-mat-khau', 'UserController@changepass');
        Route::get('/{slug}/don-hang', 'UserController@order');
        Route::put('/huy-don-hang/{id}', 'UserController@cancelorder');
    });

    // Client Cart Route
    Route::group([
        'prefix' => 'gio-hang'
    ], function () {
        Route::get('/', 'CartController@index');
        Route::post('/', 'CartController@add');
        Route::get('/cap-nhat/{rowId}/{qty}', 'CartController@update');
        Route::delete('/xoa-san-pham/{id}', 'CartController@delete');
        Route::get('/thanh-toan', 'CartController@checkout');
        Route::get('/hoan-thanh/{order_code}', 'CartController@complete');
    });


    Route::group([
        'prefix' => 'don-hang'
    ], function () {        
        Route::post('/', 'OrderController@storeOrder');
    });

    // Client Subcribe Route
    Route::post('/dang-ky', 'SubcribeController@store');

    // Client Contact Route
    Route::group([
        'prefix' => 'lien-he'
    ], function () {
        Route::get('/', 'HomeController@contact');
        Route::post('/', 'ContactController@store');
    });
});
