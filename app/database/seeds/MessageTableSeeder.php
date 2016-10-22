<?php

class MessageTableSeeder extends Seeder {

    public function run()
    {
    	$faker = Faker\Factory::create();

    	$categoryIds = DB::table('categories')->lists('id');

    	for($i=0; $i<=49; $i++)
    	{
    		$title = $faker->sentence(3);
	        DB::table('messages')->insert(array(
	        	'category_id' => array_rand($categoryIds),
	        	//'category_id' => $faker->numberBetween(1,50),
	        	'title' => $title,
	        	'slug' => Str::slug($title),
	        	'message_content' => $faker->paragraph(20),
	        	'views' => $faker->numberBetween(40,1000),
	        	'meta_description' => $faker->paragraph,
	        	'meta_keywords' => implode(", ", $faker->words(6)),
	        	'message_status' => $faker->numberBetween(0,1),
	        	'created_at' => date('Y-m-d h:i:s'),
	        	'updated_at' => date('Y-m-d h:i:s')
	        )); 
 
    	}
    }

}