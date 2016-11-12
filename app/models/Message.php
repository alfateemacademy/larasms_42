<?php

class Message extends Eloquent {

	use SoftDeletingTrait;

	protected $fillable = [
		'category_id',
		'title', 
		'slug', 
		'message_content',
		'views',
		'meta_description', 
		'meta_keywords', 
		'message_status'
	];

	public function category()
	{
		return $this->belongsTo('Category', 'category_id');
	}	
	
}