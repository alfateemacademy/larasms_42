<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WebmastersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('webmasters', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('fullname', 100);
			$table->string('email', 100);
			$table->string('facebook_id', 100);
			$table->string('twitter_id', 100);
			$table->string('linkedin_id', 100);
			$table->text('webmaster_content');
			$table->string('webmaster_img');
			$table->tinyInteger('webmaster_status');
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
		Schema::drop('webmasters');
	}

}
