<?php

Route::group(['prefix'=> 'dashboard'], function()
{
	Route::group(['prefix'=> 'auth'], function(){
		Route::get('logout', ['as'=>'get.dashboard.auth.logout','uses'=>'Dashboard\DashboardController@getLogout']);
	});

	Route::group(['prefix'=> 'cate'], function(){
		Route::get('list', ['as'=>'get.dashboard.cate.list','uses'=>'Dashboard\CateController@list']);
		Route::get('create', ['as'=>'get.dashboard.cate.create','uses'=>'Dashboard\CateController@create']);
		Route::get('edit/{id}', ['as'=>'get.dashboard.cate.edit','uses'=>'Dashboard\CateController@edit'])->where('id', '[0-9]+');;
		Route::get('delete/{id}', ['as'=>'get.dashboard.cate.delete','uses'=>'Dashboard\CateController@delete'])->where('id', '[0-9]+');
		Route::post('create', ['as'=>'post.dashboard.cate.create','uses'=>'Dashboard\CateController@postCreate']);
		Route::post('edit/{id}', ['as'=>'post.dashboard.cate.edit','uses'=>'Dashboard\CateController@postEdit'])->where('id', '[0-9]+');
	});

	Route::group(['prefix'=> 'post'], function(){
		Route::get('list', ['as'=>'get.dashboard.post.list','uses'=>'Dashboard\PostController@list']);
		Route::get('create', ['as'=>'get.dashboard.post.create','uses'=>'Dashboard\PostController@create']);
		Route::get('edit/{id}', ['as'=>'get.dashboard.post.edit','uses'=>'Dashboard\PostController@edit'])->where('id', '[0-9]+');;
		Route::get('delete/{id}', ['as'=>'get.dashboard.post.delete','uses'=>'Dashboard\PostController@delete'])->where('id', '[0-9]+');
		Route::post('create', ['as'=>'post.dashboard.post.create','uses'=>'Dashboard\PostController@postCreate']);
		Route::post('edit/{id}', ['as'=>'post.dashboard.post.edit','uses'=>'Dashboard\PostController@postEdit'])->where('id', '[0-9]+');

		Route::get('tags', ['as'=>'get.dashboard.post.tag','uses'=>'Dashboard\PostController@tags']);
		Route::post('tags', ['as'=>'post.dashboard.post.tag','uses'=>'Dashboard\PostController@postTag']);
		Route::get('tags/delete/{id}', ['as'=>'get.dashboard.post.tag.delete','uses'=>'Dashboard\PostController@deleteTag'])->where('id', '[0-9]+');
	});

	Route::group(['prefix'=> 'customer'], function(){
		Route::get('list', ['as'=>'get.dashboard.customer.list','uses'=>'Dashboard\CustomerController@list']);
		Route::get('create', ['as'=>'get.dashboard.customer.create','uses'=>'Dashboard\CustomerController@create']);
		Route::get('edit/{id}', ['as'=>'get.dashboard.customer.edit','uses'=>'Dashboard\CustomerController@edit'])->where('id', '[0-9]+');;
		Route::get('delete/{id}', ['as'=>'get.dashboard.customer.delete','uses'=>'Dashboard\CustomerController@delete'])->where('id', '[0-9]+');
		Route::post('create', ['as'=>'post.dashboard.customer.create','uses'=>'Dashboard\CustomerController@postCreate']);
		Route::post('edit/{id}', ['as'=>'post.dashboard.customer.edit','uses'=>'Dashboard\CustomerController@postEdit'])->where('id', '[0-9]+');
	});

	Route::group(['prefix'=> 'video'], function(){
		Route::get('list', ['as'=>'get.dashboard.video.list','uses'=>'Dashboard\VideoController@list']);
		Route::get('create', ['as'=>'get.dashboard.video.create','uses'=>'Dashboard\VideoController@create']);
		Route::get('edit/{id}', ['as'=>'get.dashboard.video.edit','uses'=>'Dashboard\VideoController@edit'])->where('id', '[0-9]+');;
		Route::get('delete/{id}', ['as'=>'get.dashboard.video.delete','uses'=>'Dashboard\VideoController@delete'])->where('id', '[0-9]+');
		Route::post('create', ['as'=>'post.dashboard.video.create','uses'=>'Dashboard\VideoController@postCreate']);
		Route::post('edit/{id}', ['as'=>'post.dashboard.video.edit','uses'=>'Dashboard\VideoController@postEdit'])->where('id', '[0-9]+');
	});
	
	Route::group(['prefix'=> 'gallery'], function()
	{
		Route::get('list', ['as'=>'get.dashboard.gallery.list','uses'=>'Dashboard\GalleryController@list']);
		Route::get('create', ['as'=>'get.dashboard.gallery.create','uses'=>'Dashboard\GalleryController@create']);
		Route::get('edit/{id}', ['as'=>'get.dashboard.gallery.edit','uses'=>'Dashboard\GalleryController@edit'])->where('id', '[0-9]+');;
		Route::get('delete/{id}', ['as'=>'get.dashboard.gallery.delete','uses'=>'Dashboard\GalleryController@delete'])->where('id', '[0-9]+');
		Route::post('create', ['as'=>'post.dashboard.gallery.create','uses'=>'Dashboard\GalleryController@postCreate']);
		Route::post('edit/{id}', ['as'=>'post.dashboard.gallery.edit','uses'=>'Dashboard\GalleryController@postEdit'])->where('id', '[0-9]+');
	});

	Route::group(['prefix'=> 'teams'], function(){
		Route::get('list', ['as'=>'get.dashboard.teams.list','uses'=>'Dashboard\TeamsController@list']);
		Route::get('create', ['as'=>'get.dashboard.teams.create','uses'=>'Dashboard\TeamsController@create']);
		Route::get('edit/{id}', ['as'=>'get.dashboard.teams.edit','uses'=>'Dashboard\TeamsController@edit'])->where('id', '[0-9]+');;
		Route::get('delete/{id}', ['as'=>'get.dashboard.teams.delete','uses'=>'Dashboard\TeamsController@delete'])->where('id', '[0-9]+');
		Route::post('create', ['as'=>'post.dashboard.teams.create','uses'=>'Dashboard\TeamsController@postCreate']);
		Route::post('edit/{id}', ['as'=>'post.dashboard.teams.edit','uses'=>'Dashboard\TeamsController@postEdit'])->where('id', '[0-9]+');
	});

	Route::group(['prefix'=> 'page'], function(){
		Route::get('home-page', ['as'=>'get.dashboard.page.home','uses'=>'Dashboard\PageController@home']);
		Route::post('home-page', ['as'=>'post.dashboard.page.home','uses'=>'Dashboard\PageController@postHome']);
		//page
		Route::get('list', ['as'=>'get.dashboard.pageSingle.list','uses'=>'Dashboard\PageController@list']);
		Route::get('create', ['as'=>'get.dashboard.pageSingle.create','uses'=>'Dashboard\PageController@createPage']);
		Route::post('create', ['as'=>'post.dashboard.pageSingle.create','uses'=>'Dashboard\PageController@postCreatePage']);
		Route::get('edit/{id}', ['as'=>'get.dashboard.pageSingle.edit','uses'=>'Dashboard\PageController@editPage']);
		Route::post('edit/{id}', ['as'=>'post.dashboard.pageSingle.edit','uses'=>'Dashboard\PageController@postEditPage']);
		Route::get('delete/{id}', ['as'=>'get.dashboard.pageSingle.delete','uses'=>'Dashboard\PageController@deletePage']);
		//Banner
		Route::get('banner', ['as'=>'get.dashboard.page.banner','uses'=>'Dashboard\PageController@banner']);
		Route::get('banner/create', ['as'=>'get.dashboard.page.banner.create','uses'=>'Dashboard\PageController@createBanner']);
		Route::post('banner/create', ['as'=>'post.dashboard.page.banner.create','uses'=>'Dashboard\PageController@postCreateBanner']);
		Route::get('banner/edit/{id}', ['as'=>'get.dashboard.page.banner.edit','uses'=>'Dashboard\PageController@editBanner']);
		Route::post('banner/edit/{id}', ['as'=>'post.dashboard.page.banner.edit','uses'=>'Dashboard\PageController@postEditBanner']);
		Route::get('banner/delete/{id}', ['as'=>'get.dashboard.page.banner.delete','uses'=>'Dashboard\PageController@deleteBanner']);

 	});

	Route::group(['prefix'=> 'product'], function(){
		Route::get('list', ['as'=>'get.dashboard.product.list','uses'=>'Dashboard\ProductController@list']);
		Route::get('create', ['as'=>'get.dashboard.product.create','uses'=>'Dashboard\ProductController@create']);
		Route::get('edit/{id}', ['as'=>'get.dashboard.product.edit','uses'=>'Dashboard\ProductController@edit'])->where('id', '[0-9]+');;
		Route::get('delete/{id}', ['as'=>'get.dashboard.product.delete','uses'=>'Dashboard\ProductController@delete'])->where('id', '[0-9]+');
		Route::post('create', ['as'=>'post.dashboard.product.create','uses'=>'Dashboard\ProductController@postCreate']);
		Route::post('edit/{id}', ['as'=>'post.dashboard.product.edit','uses'=>'Dashboard\ProductController@postEdit'])->where('id', '[0-9]+');


		Route::group(['prefix'=> 'prd-att'], function(){
			Route::get('list', ['as'=>'get.dashboard.product.prdatt.list','uses'=>'Dashboard\PrdAttController@list']);
			Route::get('create/{code}', ['as'=>'get.dashboard.product.prdatt.create','uses'=>'Dashboard\PrdAttController@create']);
			Route::get('edit/{code}/{id}', ['as'=>'get.dashboard.product.prdatt.edit','uses'=>'Dashboard\PrdAttController@edit'])->where('id', '[0-9]+');;
			Route::get('delete/{id}', ['as'=>'get.dashboard.product.prdatt.delete','uses'=>'Dashboard\PrdAttController@delete'])->where('id', '[0-9]+');
			Route::post('create/{code}', ['as'=>'post.dashboard.product.prdatt.create','uses'=>'Dashboard\PrdAttController@postCreate']);
			Route::post('edit/{code}/{id}', ['as'=>'post.dashboard.product.prdatt.edit','uses'=>'Dashboard\PrdAttController@postEdit'])->where('id', '[0-9]+');
		});

		Route::group(['prefix'=> 'att'], function(){
			Route::get('list', ['as'=>'get.dashboard.product.att.list','uses'=>'Dashboard\AttributesController@list']);
			Route::get('create/{code}', ['as'=>'get.dashboard.product.att.create','uses'=>'Dashboard\AttributesController@create']);
			Route::get('edit/{code}/{id}', ['as'=>'get.dashboard.product.att.edit','uses'=>'Dashboard\AttributesController@edit'])->where('id', '[0-9]+');;
			Route::get('delete/{id}', ['as'=>'get.dashboard.product.att.delete','uses'=>'Dashboard\AttributesController@delete'])->where('id', '[0-9]+');
			Route::post('create/{code}', ['as'=>'post.dashboard.product.att.create','uses'=>'Dashboard\AttributesController@postCreate']);
			Route::post('edit/{code}/{id}', ['as'=>'post.dashboard.product.att.edit','uses'=>'Dashboard\AttributesController@postEdit'])->where('id', '[0-9]+');
		});

		Route::group(['prefix'=> 'price'], function(){
			Route::get('list', ['as'=>'get.dashboard.product.price.list','uses'=>'Dashboard\SalesPriceController@list']);
			Route::get('create', ['as'=>'get.dashboard.product.price.create','uses'=>'Dashboard\SalesPriceController@create']);
			Route::get('edit/{id}', ['as'=>'get.dashboard.product.price.edit','uses'=>'Dashboard\SalesPriceController@edit'])->where('id', '[0-9]+');;
			Route::get('delete/{id}', ['as'=>'get.dashboard.product.price.delete','uses'=>'Dashboard\SalesPriceController@delete'])->where('id', '[0-9]+');
			Route::post('create', ['as'=>'post.dashboard.product.price.create','uses'=>'Dashboard\SalesPriceController@postCreate']);
			Route::post('edit/{id}', ['as'=>'post.dashboard.product.price.edit','uses'=>'Dashboard\SalesPriceController@postEdit'])->where('id', '[0-9]+');
		});

		Route::group(['prefix'=> 'schedule'], function(){
			Route::get('list', ['as'=>'get.dashboard.product.schedule.list','uses'=>'Dashboard\ScheduleController@list']);
			Route::post('create', ['as'=>'post.dashboard.product.schedule.create','uses'=>'Dashboard\ScheduleController@postCreate']);
			Route::get('edit/{id}', ['as'=>'get.dashboard.product.schedule.edit','uses'=>'Dashboard\ScheduleController@edit'])->where('id', '[0-9]+');;
			Route::post('edit/{id}', ['as'=>'post.dashboard.product.schedule.edit','uses'=>'Dashboard\ScheduleController@postEdit'])->where('id', '[0-9]+');
		});

	});

	Route::group(['prefix'=> 'user'], function(){
		Route::get('list', ['as'=>'get.dashboard.user.list','uses'=>'Dashboard\UserController@list']);
		Route::get('create', ['as'=>'get.dashboard.user.create','uses'=>'Dashboard\UserController@create']);
		Route::get('edit/{id}', ['as'=>'get.dashboard.user.edit','uses'=>'Dashboard\UserController@edit'])->where('id', '[0-9]+');;
		Route::get('delete/{id}', ['as'=>'get.dashboard.user.delete','uses'=>'Dashboard\UserController@delete'])->where('id', '[0-9]+');
		Route::post('create', ['as'=>'post.dashboard.user.create','uses'=>'Dashboard\UserController@postCreate']);
		Route::post('edit/{id}', ['as'=>'post.dashboard.user.edit','uses'=>'Dashboard\UserController@postEdit'])->where('id', '[0-9]+');

		Route::get('roles/list', ['as'=>'get.dashboard.user.roles','uses'=>'Dashboard\UserController@getRoles']);
	});

});
