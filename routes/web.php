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
//Auth Routes

// Authentication routes
Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);



//Resgistration routes
Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

//Logout route

Route::get('logout', ['as'=>'logout', 'uses'=>'Auth\LoginController@logout']);

//Password Rest Routes
Route::get('password/reset/{token?}', ['uses'=>'Auth\ForgotPasswordController@showLinkRequestForm']);
Route::post('password/email', ['uses'=>'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::post('password/reset', ['uses' => 'Auth\ResetPasswordController@reset']);


Route::get('blog/{slug}',['as'=>'blog.single', 'uses'=>'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');

Route::get('blog',['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);

Route::get('contact', 'PagesController@getContact');

Route::get('about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');

Route::resource('posts', 'PostController');
