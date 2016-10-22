<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MediasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('media_type', 50);
			$table->string('title', 100);
			$table->string('slug', 100);
			$table->text('media_content');
			$table->string('media_img');
			$table->tinyInteger('media_status');
			$table->text('meta_description')->nullable();
			$table->string('meta_keywords')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('medias');
	}

}
