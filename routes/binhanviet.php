<?php

Route::get('/', 'BAV\IndexController@index')->name('home');
Route::get('/lien-he', 'BAV\IndexController@contact')->name('lien-he');


// //page
// Route::get('/lien-he', 'Home\HomeController@contact')->name('lien-he');
// //detail tour
// Route::get('/{cate}', ['as'=>'get.home.tour.list','uses'=>'Home\ProductController@list']);
// Route::get('/{cate}/dia-diem/{id}-{name}', ['as'=>'get.home.tour.location.list','uses'=>'Home\ProductController@listByLocation']);
// Route::get('/{cate}/{id}-{name}', ['as'=>'get.home.tour.detail','uses'=>'Home\ProductController@detail'])->where('id', '[0-9]+');
// Route::post('/tour/post/guide/{type}', ['as'=>'post.home.tour.guide','uses'=>'Home\ProductController@guide']);
// //blog
// Route::get('/blog/{cate}/{id}-{name}', ['as'=>'get.home.post.detail','uses'=>'Home\PostController@detailPost'])->where('id', '[0-9]+');