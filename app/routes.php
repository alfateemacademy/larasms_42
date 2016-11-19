<?php


Route::group(['prefix' => 'admin'], function() {

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
	// index, create, store, edit, update, destroy
	/*Route::get('category', 'AdminCategoryController@index');
	Route::get('category/create', 'AdminCategoryController@create');
	Route::get('category/edit', 'AdminCategoryController@edit');*/
});

Route::get('/', 'HomeController@index');
