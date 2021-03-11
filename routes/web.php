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
//page
Route::get('/lien-he', 'Home\HomeController@contact')->name('lien-he');


//detail tour
Route::get('/{cate}', ['as'=>'get.home.tour.list','uses'=>'Home\ProductController@list']);
Route::get('/{cate}/dia-diem/{id}-{name}', ['as'=>'get.home.tour.location.list','uses'=>'Home\ProductController@listByLocation']);
Route::get('/{cate}/{id}-{name}', ['as'=>'get.home.tour.detail','uses'=>'Home\ProductController@detail'])->where('id', '[0-9]+');



//blog
Route::get('/blog/{cate}/{id}-{name}', ['as'=>'get.home.post.detail','uses'=>'Home\PostController@detailPost'])->where('id', '[0-9]+');
