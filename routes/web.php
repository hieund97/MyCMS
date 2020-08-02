<?php

use Illuminate\Support\Facades\Route;


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
    'namespace' => 'admin',
    'middleware' => 'CheckAdmin'
], function () {
    // Xuất pdf
    Route::get('/ticket-pdf','PdfController@ticket_pdf');
    Route::get('/analytic-pdf','PdfController@analytic_pdf');

    // Email template
    Route::get('/email-template','EmailController@list');
    Route::get('/email-template/{id}/edit','EmailController@edit');
    Route::get('/email-template/create','EmailController@create');
    Route::post('/email-template/store','EmailController@store');
    Route::put('/email-template/{id}/update','EmailController@update');
    Route::delete('/email-template/{id}/delete', 'EmailController@destroy');

    
    Route::get('register', 'RegisterController@register');
    Route::post('/register', 'RegisterController@store');
    Route::group([
        'middleware' => 'guest'
    ], function () {
        Route::get('login', "LoginController@showLoginForm");
        Route::post('login', "LoginController@login");
    });

    Route::group([
        'middleware' => 'auth',
        
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
            Route::post('import', 'UserController@import');
            Route::get('export', 'UserController@export');
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

            // import and Export excel
            Route::post('import', 'ProductController@import');
            Route::get('export', 'ProductController@export');

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

            //update stauts
            Route::post('/update-status-product/{id}', 'ProductController@updateStatusProduct');
            Route::post('/update-status-variant/{id}', 'ProductController@updateStatusVariant');

            // ticket
            Route::get('/ticket-product', 'ProductController@getTicketProduct');

            //sale
            Route::get('/sale', 'ProductController@getListSale');
            Route::get('/sale/{id}/edit', 'ProductController@editSale');
            Route::post('/add-sale', 'ProductController@addSale');
            Route::put('/sale/{id}/edit', 'ProductController@updateSale');
            Route::delete('/sale/{id}/delete', 'ProductController@destroySale');
            Route::post('/sale/update-status/{id}', 'ProductController@updateStatusSale');


            // Product back
            Route::get('/product-back', 'ProductController@getProductBack');
            Route::post('/update-status-product-back/{id}', 'ProductController@updateStatusProductBack');

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
            Route::post('import', 'CategoryController@import');
            Route::get('export', 'CategoryController@export');
            Route::post('/update-status/{id}', 'CategoryController@updateStatus');
        });

        // Admin Trending-Product Route
        Route::group([
            'prefix' => 'trending'
        ], function () {
            Route::get('/', 'TrendingController@index');
            Route::get('/create', 'TrendingController@create');
            Route::get('/{id}/edit', 'TrendingController@edit');
            Route::put('{id}/edit', 'TrendingController@update');
            Route::post('/', 'TrendingController@store');
            Route::delete('{id}/delete', 'TrendingController@destroy');
            Route::post('/update-status/{id}', 'TrendingController@updateStatus');
            Route::post('/update-status-navbar/{id}', 'TrendingController@updateStatusNavbar');

        });

        // Admin Comment Route
        Route::group([
            'prefix' => 'comment'
        ], function () {
            Route::get('/', 'ReviewController@index');
            Route::get('/{review}/detail', 'ReviewController@detail');
            Route::get('/block', 'ReviewController@listBlock');
            Route::post('/{id}/block', 'ReviewController@block');
            Route::post('/{id}/unblock', 'ReviewController@unblock');
            Route::delete('{id}/delete', 'ReviewController@destroy');
            Route::post('/{id}/repblock', 'ReviewController@repBlock');
            Route::post('/{id}/unrepblock', 'ReviewController@unRepBlock');
            Route::delete('{id}/deletereply', 'ReviewController@destroyReply');
            Route::post('reply', 'ReviewController@reply');
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
            Route::post('import', 'BlogController@import');
            Route::get('export', 'BlogController@export');
        });

        // Admin Blog-Category Route
        Route::group([
            'prefix' => 'blog-category'
        ], function () {
            Route::get('/', 'Blog_CategoryController@index');
            Route::post('/', 'Blog_CategoryController@store');
            Route::get('{blog_category}/edit', 'Blog_CategoryController@edit');
            Route::put('{blog_category}/edit', 'Blog_CategoryController@update');
            Route::delete('{blog_category}/delete', 'Blog_CategoryController@destroy');
            Route::post('import', 'Blog_CategoryController@import');
            Route::get('export', 'Blog_CategoryController@export');
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
            Route::post('/update-status/{id}', 'SliderController@updateStatusSlider');

        });

        // Admin Subcribe Route
        Route::group([
            'prefix' => 'subcribe'
        ], function () {
            Route::get('/', 'SubcribeController@index');
            Route::delete('/{subcribe}/delete', 'SubcribeController@destroy');
            Route::post('import', 'SubcribeController@import');
            Route::get('export', 'SubcribeController@export');
        });

        // Admin Contact Route
        Route::group([
            'prefix' => 'contact'
        ], function () {
            Route::get('/', 'ContactController@index');
            Route::delete('/{contact}/delete', 'ContactController@destroy');
            Route::post('/import', 'ContactController@import');
            Route::get('/export', 'ContactController@export');
            Route::get('/{id}/reply', 'ContactController@edit');
            Route::post('/reply', 'ContactController@reply');
        });


        // Admin Order Route
        Route::group([
            'prefix' => 'order'
        ], function () {
            Route::get('/', 'OrderController@index');
            Route::put('/cancel/{id}','OrderController@cancel');
            Route::get('/{id}/edit','OrderController@edit');
            Route::post('/{id}/edit','OrderController@update');
            Route::post('update-status/{id}', 'OrderController@updateStatus');
            Route::post('import', 'OrderController@import');
            Route::get('export', 'OrderController@export');
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
            Route::post('import', 'ShipMethodController@import');
            Route::get('export', 'ShipMethodController@export');
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
            Route::post('import', 'PayMethodController@import');
            Route::get('export', 'PayMethodController@export');
        });

        Route::group([
            'prefix' => 'revenue'
        ], function () {
            Route::get('/', 'RevenueController@index');
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
    Route::get('/tim-kiem-san-pham', 'HomeController@search');

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
        Route::get('/loc-thuoc-tinh', 'ProductController@filterAttribute');
        Route::post('/gia', 'ProductController@getCustomPrice');
        Route::post('/check-khuyen-mai','ProductController@checkSale');

    });

    // Client Trending Route
    Route::group([
        'prefix' => 'trending'
    ], function () {
        Route::get('/{slug}', 'TrendingController@index');
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

    // CLient Review Route
    Route::group([
        'prefix' => 'review'
    ], function () {
        Route::post('/member', 'ReviewController@storeAsMember');
        Route::post('/guest', 'ReviewController@storeAsGuest');
        Route::post('/{id}/memreply', 'ReviewController@memReply' );
        Route::post('/{id}/guestreply', 'ReviewController@guestReply' );
    });
});
