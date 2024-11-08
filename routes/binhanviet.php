<?php

Route::get('/', 'BAV\IndexController@index')->name('home');
Route::get('/lien-he', 'BAV\IndexController@contact')->name('lien-he');
Route::get('/tour/{cate}', ['as'=>'get.tour.by.cate','uses'=>'BAV\TourController@list_tours_by_cate']);
Route::get('/tour/{cate}/{id}-{alias}', ['as'=>'get.tour.detail','uses'=>'BAV\TourController@detail'])->where('id', '[0-9]+');
Route::get('/tour/dia-diem/{alias}', ['as'=>'get.tour.by.location','uses'=>'BAV\TourController@list_tours_by_location']);

