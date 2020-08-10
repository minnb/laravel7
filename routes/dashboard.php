<?php

Route::group(['prefix'=> 'dashboard'], function(){
	Route::group(['prefix'=> 'auth'], function(){
		Route::get('logout', ['as'=>'get.dashboard.auth.logout','uses'=>'Dashboard\DashboardController@getLogout']);
	});

	Route::group(['prefix'=> 'cate'], function(){
		Route::get('list', ['as'=>'get.dashboard.cate.list','uses'=>'Dashboard\CateController@list']);
		Route::get('create', ['as'=>'get.dashboard.cate.create','uses'=>'Dashboard\CateController@create']);
		Route::get('edit/{id}', ['as'=>'get.dashboard.cate.edit','uses'=>'Dashboard\CateController@edit'])->where('id', '[0-9]+');;
		Route::get('delete/{id}', ['as'=>'get.dashboard.cate.delete','uses'=>'Dashboard\CateController@delete'])->where('id', '[0-9]+');;
		Route::post('create', ['as'=>'post.dashboard.cate.create','uses'=>'Dashboard\CateController@postCreate']);
		Route::post('edit/{id}', ['as'=>'post.dashboard.cate.edit','uses'=>'Dashboard\CateController@postEdit'])->where('id', '[0-9]+');;
	});

	Route::group(['prefix'=> 'post'], function(){
		Route::get('list', ['as'=>'get.dashboard.post.list','uses'=>'Dashboard\PostController@list']);
		Route::get('create', ['as'=>'get.dashboard.post.create','uses'=>'Dashboard\PostController@create']);
		Route::get('edit/{id}', ['as'=>'get.dashboard.post.edit','uses'=>'Dashboard\PostController@edit'])->where('id', '[0-9]+');;
		Route::get('delete/{id}', ['as'=>'get.dashboard.post.delete','uses'=>'Dashboard\PostController@delete'])->where('id', '[0-9]+');;
		Route::post('create', ['as'=>'post.dashboard.post.create','uses'=>'Dashboard\PostController@postCreate']);
		Route::post('edit/{id}', ['as'=>'post.dashboard.post.edit','uses'=>'Dashboard\PostController@postEdit'])->where('id', '[0-9]+');;

		Route::get('tags', ['as'=>'get.dashboard.post.tag','uses'=>'Dashboard\PostController@tags']);
		Route::post('tags', ['as'=>'post.dashboard.post.tag','uses'=>'Dashboard\PostController@postTag']);
		Route::get('tags/delete/{id}', ['as'=>'get.dashboard.post.tag.delete','uses'=>'Dashboard\PostController@deleteTag'])->where('id', '[0-9]+');;
	});

	Route::group(['prefix'=> 'product'], function(){
		Route::get('list', ['as'=>'get.dashboard.product.list','uses'=>'Dashboard\ProductController@list']);
		Route::get('create', ['as'=>'get.dashboard.product.create','uses'=>'Dashboard\ProductController@create']);
		Route::get('edit/{id}', ['as'=>'get.dashboard.product.edit','uses'=>'Dashboard\ProductController@edit'])->where('id', '[0-9]+');;
		Route::get('delete/{id}', ['as'=>'get.dashboard.product.delete','uses'=>'Dashboard\ProductController@delete'])->where('id', '[0-9]+');;
		Route::post('create', ['as'=>'post.dashboard.product.create','uses'=>'Dashboard\ProductController@postCreate']);
		Route::post('edit/{id}', ['as'=>'post.dashboard.product.edit','uses'=>'Dashboard\ProductController@postEdit'])->where('id', '[0-9]+');;


		Route::group(['prefix'=> 'att'], function(){
			Route::get('list', ['as'=>'get.dashboard.product.att.list','uses'=>'Dashboard\AttributesController@list']);
			Route::get('create', ['as'=>'get.dashboard.product.att.create','uses'=>'Dashboard\AttributesController@create']);
			Route::get('edit/{id}', ['as'=>'get.dashboard.product.att.edit','uses'=>'Dashboard\AttributesController@edit'])->where('id', '[0-9]+');;
			Route::get('delete/{id}', ['as'=>'get.dashboard.product.att.delete','uses'=>'Dashboard\AttributesController@delete'])->where('id', '[0-9]+');;
			Route::post('create', ['as'=>'post.dashboard.product.att.create','uses'=>'Dashboard\AttributesController@postCreate']);
			Route::post('edit/{id}', ['as'=>'post.dashboard.product.att.edit','uses'=>'Dashboard\AttributesController@postEdit'])->where('id', '[0-9]+');;
		});

		Route::group(['prefix'=> 'price'], function(){
			Route::get('list', ['as'=>'get.dashboard.product.price.list','uses'=>'Dashboard\SalesPriceController@list']);
			Route::get('create', ['as'=>'get.dashboard.product.price.create','uses'=>'Dashboard\SalesPriceController@create']);
			Route::get('edit/{id}', ['as'=>'get.dashboard.product.price.edit','uses'=>'Dashboard\SalesPriceController@edit'])->where('id', '[0-9]+');;
			Route::get('delete/{id}', ['as'=>'get.dashboard.product.price.delete','uses'=>'Dashboard\SalesPriceController@delete'])->where('id', '[0-9]+');;
			Route::post('create', ['as'=>'post.dashboard.product.price.create','uses'=>'Dashboard\SalesPriceController@postCreate']);
			Route::post('edit/{id}', ['as'=>'post.dashboard.product.price.edit','uses'=>'Dashboard\SalesPriceController@postEdit'])->where('id', '[0-9]+');;
		});
	});



});
