<?php


Route::group(['prefix' => 'admin'], function() {
	Route::get('category', 'AdminCategoryController@index');
	Route::get('category/create', 'AdminCategoryController@create');
	Route::get('message', 'AdminCategoryController@index');
});

Route::group(['prefix' => 'sales'], function() {
	Route::get('category', 'SalesCategoryController@index');
	Route::get('category/create', 'SalesCategoryController@create');
});



Route::get('message/create', 'AdminCategoryController@create');
/*Route::get('admin/category', 'AdminCategoryController@index');
Route::get('admin/category', 'AdminCategoryController@index');
Route::get('admin/category', 'AdminCategoryController@index');
Route::get('admin/category', 'AdminCategoryController@index');*/

Route::get('/', 'HomeController@showWelcome');
