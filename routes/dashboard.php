<?php

Route::group(['prefix'=> 'dashboard'], function(){
	Route::group(['prefix'=> 'auth'], function(){
		Route::get('logout', ['as'=>'get.dashboard.auth.logout','uses'=>'Dashboard\DashboardController@getLogout']);
	});

	Route::group(['prefix'=> 'cate'], function(){
		Route::get('list', ['as'=>'get.dashboard.cate.list','uses'=>'Dashboard\CateController@list']);
		Route::get('create', ['as'=>'get.dashboard.cate.create','uses'=>'Dashboard\CateController@create']);
		Route::get('edit/{id}', ['as'=>'get.dashboard.cate.edit','uses'=>'Dashboard\CateController@edit']);
		Route::post('create', ['as'=>'post.dashboard.cate.create','uses'=>'Dashboard\CateController@postCreate']);
		Route::post('edit/{id}', ['as'=>'post.dashboard.cate.edit','uses'=>'Dashboard\CateController@postEdit']);
	});


});
