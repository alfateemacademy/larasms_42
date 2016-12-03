<?php

Route::group(['prefix' => 'admin'], function() {
	Route::get('login', [
		'as' => 'admin.auth.login', 
		'uses' => 'AdminAuthController@login'
	]);

	Route::post('login', [
		'as' => 'admin.auth.post-login', 
		'uses' => 'AdminAuthController@postLogin'
	]);

	Route::get('logout', [
		'as' => 'admin.auth.logout', 
		'uses' => 'AdminAuthController@logout'
	]);
});

Route::group(['prefix' => 'admin', 'before' => 'auth'], function() {

	Route::delete('category/{category}/restore', [
		'as' => 'admin.category.restore', 
		'uses' => 'AdminCategoryController@restore'
	]);
	Route::delete('category/{category}/force', [
		'as' => 'admin.category.force', 
		'uses' => 'AdminCategoryController@force'
	]);
	Route::get('category/trash', [
		'as' => 'admin.category.trash', 
		'uses' => 'AdminCategoryController@trash'
	]);
	Route::resource('category', 'AdminCategoryController');

	Route::resource('message', 'AdminMessageController');
	Route::resource('user', 'AdminUserController');
	Route::get('/', [
		'as' => 'admin.dashboard', 
		'uses' => 'AdminHomeController@dashboard'
	]);
	// index, create, store, edit, update, destroy
	/*Route::get('category', 'AdminCategoryController@index');
	Route::get('category/create', 'AdminCategoryController@create');
	Route::get('category/edit', 'AdminCategoryController@edit');*/
});

Route::get('/message/{slug}', [
	'as' => 'message.detail', 
	'uses' => 'MessageController@detail'
]);
Route::get('/', 'HomeController@index');
