<?php


Route::group(['prefix' => 'admin'], function() {
	Route::resource('category', 'AdminCategoryController');
	// index, create, store, edit, update, destroy
	/*Route::get('category', 'AdminCategoryController@index');
	Route::get('category/create', 'AdminCategoryController@create');
	Route::get('category/edit', 'AdminCategoryController@edit');*/
});

Route::get('/', 'HomeController@showWelcome');
