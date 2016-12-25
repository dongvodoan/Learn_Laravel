<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 2; $i++){
        	DB::table('users')->insert([
        		'name'            => $faker-> username,
        		'email'           => $faker-> freeEmail, 
        		'password'        => bcrypt('123456'),
        		'created_at'      => Carbon\Carbon::now()
        	]);
        }
    }
}
