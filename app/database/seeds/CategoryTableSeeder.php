<?php

class CategoryTableSeeder extends Seeder {

    public function run()
    {

    	$faker = Faker\Factory::create();

    	for($i=0; $i<=49; $i++)
    	{
    		$title = $faker->sentence(3);
	        DB::table('categories')->insert(array(
	        	'title' => $title,
	        	'slug' => Str::slug($title),
	        	'meta_description' => $faker->paragraph,
	        	'meta_keywords' => implode(", ", $faker->words(6)),
	        	'category_status' => $faker->numberBetween(0,1),
	        	'created_at' => date('Y-m-d h:i:s'),
	        	'updated_at' => date('Y-m-d h:i:s')
	        )); 
 
    	}
    }

}