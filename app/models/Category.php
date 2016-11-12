<?php

class Category extends Eloquent {

	use SoftDeletingTrait;

	protected $fillable = [
		'title', 
		'slug', 
		'meta_description', 
		'meta_keywords', 
		'category_status'
	];

	public function messages()
	{
		return $this->hasMany('Message', 'category_id');
	}
	
}