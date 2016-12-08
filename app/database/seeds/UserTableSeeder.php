<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
    	$faker = Faker\Factory::create();

    	for($i=0; $i<=9; $i++)
    	{
    		
	        DB::table('users')->insert(array(
	        	'name' => $faker->name,
	        	'email' => $faker->email,
	        	'password' => Hash::make('abc123'),
	        	'user_status' => 1,
	        	'created_at' => date('Y-m-d h:i:s'),
	        	'updated_at' => date('Y-m-d h:i:s'),
	        ));
  
    	}
    }

}