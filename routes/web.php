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
    Route::group([
        'middleware' => 'guest'
    ], function () {
        Route::get('/login', "LoginController@showLoginForm");
        Route::get('/register', 'RegisterController@register');
        Route::post('/login', "LoginController@login");

    });

    Route::group([
        // 'middleware' => 'auth'
    ], function () {
        Route::get('/dashboard', 'DashboardController@index');
        Route::post('/logout', 'LoginController@logout');
    });


});

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