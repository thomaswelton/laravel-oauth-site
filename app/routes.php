<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('/demos', 'OauthprovidersController');

Route::resource('/docs/usage', 'DocsController@usage');
Route::resource('/docs/providers', 'DocsController@providers');
Route::resource('/docs', 'DocsController');

Route::controller('/', 'HomeController');
