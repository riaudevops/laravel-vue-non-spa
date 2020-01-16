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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/**
 * Home controller
 */
Route::get('/', 'HomeController@index')->name('home');

Route::get('/sso-redirect', function (Request $request){
    $request->session()->put('state', $state = Str::random(40));
    $query = http_build_query([
        'client_id' => 1,
        'redirect_uri' => '',
        'response_type' => 'code',
        'scope' => '',
        'state' => $state,
    ]);
    return redirect('http://connect.stai-tbh.localhost/oauth/authorize?'.$query);
});

/**
 * Buku
 */
Route::prefix('buku')->name('buku.')->group(function (){
    Route::get('/detail/{id?}', 'BukuController@detail')->name('detail');
    Route::get('/search', 'BukuController@search')->name('search');
});

Route::prefix('buku')->group(function(){
    Route::get('/detail/{id}','BukuController@detail')->name('buku.detail');
});

/**
 * Testing purposes onlye
 */
Route::prefix('development')->name('development.')->group(function (){
    Route::get('/html', 'DevelopmentController@html')->name('html');
    Route::get('/vue-component', 'DevelopmentController@vueComponent')->name('vue-component');
});


// Authentication Routes...
Route::prefix('auth')->name('auth.')->group(function (){
    Route::get('/', 'Auth\LoginController@showIndexForm')->name('index');
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login.form');
    Route::post('login', 'Auth\LoginController@login')->name('login');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register.form');
    Route::post('register', 'Auth\RegisterController@register')->name('register');
});

// Password Reset Routes...
Route::prefix('password')->name('password.')->group(function (){
    Route::get('reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('request');
    Route::post('email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('email');
    Route::get('reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('reset');
    Route::post('reset', 'Auth\ResetPasswordController@reset')->name('update');
});


// Email Verification Routes...
Route::prefix('email')->name('email.')->group(function (){
    Route::get('verify', 'Auth\VerificationController@show')->name('notice');
    Route::get('verify/{id}', 'Auth\VerificationController@verify')->name('verify');
    Route::get('resend', 'Auth\VerificationController@resend')->name('resend');
});
