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
        ], function(){
            Route::get('/', 'ProductController@index');
            Route::get('/value', 'ProductController@value');
            Route::get('/price/{product}/edit', 'ProductController@editprice');
            Route::get('/create', 'ProductController@create');
            Route::get('/{product}/edit', 'ProductController@edit');
            Route::put('/{product}/edit', 'ProductController@update');
            Route::put('/price/{variant}/edit', 'ProductController@updateprice');
            Route::post('/', 'ProductController@store');
            Route::delete('/{product}/delete', 'ProductController@destroy');
            Route::delete('/price/{variant}/delete', 'ProductController@destroyvariant');
            Route::put('/{product}/edit', 'ProductController@update');
        });

        // Admin Product-Category Route
        Route::group([
            'prefix' => 'categories'
        ], function () {
            Route::get('/', 'CategoryController@index');
            // Route::get('/create', 'CategoryController@create');
            Route::get('{category}/edit', 'CategoryController@edit');
            Route::put('{category}/edit', 'CategoryController@update');
            Route::post('/','CategoryController@store');
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
     Route::get('/', 'HomeController@index');
     Route::get('/about', 'HomeController@about');
     Route::get('/contact', 'HomeController@contact');
        
    //  Client Blog Route
     Route::group([
         'prefix' => 'blogs'
        ], function () {
            Route::get('/', 'BlogController@index');
            Route::get('/{slug}', 'BlogController@articles');

     });

    //  Client Route Blog_category slug
     Route::get('/{b_cate_slug}', 'Blog_CategoryController@index');


    

    //  Client Product Route
    Route::group([
        'prefix' => 'products'
    ], function () {
        Route::get('/', 'ProductController@index');
        
    });

 });