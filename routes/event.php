<?php

Route::get('/', 'Event\IndexController@index')->name('home');
//Route::get('/', 'Event\IndexController@index')->name('home');

//service
Route::get('/dich-vu/{alias}', ['as'=>'get.event.service','uses'=>'Event\ServiceController@page_service']);
Route::get('/bao-gia-dich-vu', ['as'=>'get.event.price.check','uses'=>'Event\ServiceController@page_price_check']);
Route::get('/thank-you', ['as'=>'get.event.thankyou','uses'=>'Event\ServiceController@page_thank_you']);
Route::post('/bao-gia-dich-vu/gui-yeu-cau', ['as'=>'post.event.price.contact','uses'=>'Event\ServiceController@postCustomerContact']);

Route::get('/kham-pha/{alias}', ['as'=>'get.event.list','uses'=>'Event\EventController@post_event_list']);
Route::get('/{alias}', ['as'=>'get.event.detail','uses'=>'Event\EventController@post_event_detail']);
Route::get('/blog/{alias}', ['as'=>'get.blog.detail','uses'=>'Event\EventController@post_blog_detail']);

?>