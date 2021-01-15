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
include('dashboard.php');

Route::get('/', 'Home\HomeController@index')->name('home');
Route::get('/home', 'Home\HomeController@index')->name('home');
Route::get('/dashboard', ['as'=>'get.dashboard','uses'=>'Dashboard\DashboardController@index'])->name('dashboard');

//detail tour
Route::get('{cate}/{id}{name}', ['as'=>'get.home.tour.detail','uses'=>'Home\TourController@detailTour'])->where('id', '[0-9]+');

