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

Route::get('/', function () {
    return view('welcome');
    
});
Route::get('post', 'PostController@index');
Route::get('berita', 'PostController@berita');
Route::get('allberita/{id}', 'PostController@allberita');
Route::get('/test', function(){
    return view('/news/_news-form');
});
Route::get('/create', 'PostController@create');
Route::get('/destroy/{id}', 'PostController@destroy');
Route::get('/edit/{id}', 'PostController@edit');
Route::put('/update/{id}', 'PostController@update');
Route::post('/store', 'PostController@store');

Route::get('kategori', 'KategoriController@index');
Route::get('/kategori/create', 'KategoriController@create');
Route::post('/kategori/store', 'KategoriController@store');
Route::get('/kategori/destroy/{id}', 'KategoriController@destroy');
Route::get('/kategori/edit/{id}', 'KategoriController@edit');
Route::put('/kategori/update/{id}', 'KategoriController@update');

Route::get('pencipta', 'PenciptaController@index');
Route::get('/pencipta/create', 'PenciptaController@create');
Route::post('/pencipta/store', 'PenciptaController@store');
Route::get('/pencipta/destroy/{id}', 'PenciptaController@destroy');
Route::get('/pencipta/edit/{id}', 'PenciptaController@edit');
Route::put('/pencipta/update/{id}', 'PenciptaController@update');

Route::get('tag', 'TagController@index');
Route::get('/tag/create', 'TagController@create');
Route::post('/tag/store', 'TagController@store');
Route::get('/tag/destroy/{id}', 'TagController@destroy');
Route::get('/tag/edit/{id}', 'TagController@edit');
Route::put('/tag/update/{id}', 'TagController@update');

Route::group(['middleware'=>['web']],function(){
    Route::get('login', [ 'as' => 'login', 'uses' =>
    'Auth\LoginController@showLoginForm']);
    Route::post('login', [ 'as' => 'login', 'uses' =>
    'Auth\LoginController@login']);
    Route::post('logout', [ 'as' => 'logout', 'uses' =>
    'Auth\LoginController@logout']);
    // Registration Routes...
    Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

    // Email Verification Routes...
    Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
    Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
    Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('post', 'PostController');
    Route::resource('kategori', 'kategoriController');
    Route::resource('tag', 'tagController');
});
Route::get('/get-tag', 'TagController@pesan');
Route::resource('user', 'UserController');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');