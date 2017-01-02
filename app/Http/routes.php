<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});
Route::auth();

Route::get('/home', 'HomeController@index');
Route::group(['middleware' => ['web'], 'prefix' => 'blog'], function(){
	Route::get('login', [ 'uses' => 'blogAuth\AuthController@showLoginForm']); 
	Route::get('/', ['as' => 'login', 'uses' => 'blogAuth\AuthController@showLoginForm']);
	Route::get('register', [ 'uses' => 'blogAuth\AuthController@showRegistrationForm']);
});
