<?php

class Category extends Eloquent {

	protected $fillable = [
		'title', 
		'slug', 
		'meta_description', 
		'meta_keywords', 
		'category_status'
	];
	
}