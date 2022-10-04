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
Route::get('/dashboard', ['as'=>'get.dashboard','uses'=>'Dashboard\DashboardController@index'])->name('dashboard');
Route::get('404', 'HomeController@page_404');
/*
Route::fallback(function () {
    return redirect('/');
});
*/
include('dashboard.php');

if(config('app.front_end') == 'event_vietpeace')
{
    include('event.php');
}
elseif (config('app.front_end') == 'picnic_vietpeace') 
{
    include('picnic.php');
}
