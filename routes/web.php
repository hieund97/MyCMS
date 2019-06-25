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
            Route::get('/create', 'ProductController@create');
        });

        // Admin Product-Category Route
        Route::group([
            'prefix' => 'categories'
        ], function () {
            Route::get('/', 'CategoryController@index');
            Route::get('/create', 'CategoryController@create');
            Route::get('{category}/edit', 'CategoryController@edit');
        });

        // Admin Blog Route
        Route::group([
            'prefix' => 'blog'
        ], function () {
            Route::get('/', 'BlogController@index');
            Route::get('create', 'BlogController@create');
            Route::post('/', 'BlogController@store');
        });

        // Admin Blog-Category Route
        Route::group([
            'prefix' => 'blog-category'
        ], function () {
            Route::get('/', 'Blog_CategoryController@index');
            Route::get('/create', 'Blog_CategoryController@create');
            Route::post('/', 'Blog_CategoryController@store');
            Route::get('{blog_category}/edit', 'Blog_CategoryController@edit');
            Route::put('{blog_category}/edit', 'Blog_CategoryController@update');
            Route::delete('{blog_category}/delete', 'Blog_CategoryController@destroy');

        });
    });


});

// CK finder
Route::any('/ckfinder/examples/{example?}', 'CKSource\CKFinderBridge\Controller\CKFinderController@examplesAction')
    ->name('ckfinder_examples');

    

/**
 * CLient Zone
 */

 Route::group([
     'namespace' => 'Client'
    ], function () {
     Route::get('/', 'HomeController@index');
     Route::get('/about', 'HomeController@about');
     Route::get('/contact', 'HomeController@contact');

 });