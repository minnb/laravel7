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

Auth::routes();
Route::get('/login', 'Auth\LoginController@getLogin');
Route::post('/login', ['as'=>'post.login','uses'=>'Auth\LoginController@postLogin']);

Route::get('/dashboard', ['as'=>'get.dashboard','uses'=>'Dashboard\DashboardController@index'])->name('dashboard');
Route::get('404', 'HomeController@page_404');

Route::get('/auth/{provider}',['as'=>'get.social.auth', 'uses'=>'Auth\SocialAuthController@redirectToProvider']);
Route::get('/auth/{provide}/callback', 'Auth\SocialAuthController@handleProviderCallback');

Route::fallback(function () {
    return redirect('/');
});

include('dashboard.php');
include('event.php');

// if(config('app.front_end') == 'event_vietpeace')
// {
//     include('event.php');
// }
// elseif (config('app.front_end') == 'picnic_vietpeace') 
// {
//     include('picnic.php');
// }
