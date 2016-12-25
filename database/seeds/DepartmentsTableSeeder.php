<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++){
        	DB::table('departments')->insert([
        		'name'             => $faker-> company,
        		'office_number'    => $faker-> tollFreePhoneNumber,
        		'manager'          => $faker-> name,
        		'created_at'       => Carbon\Carbon::now()
        	]);
        }
    }
}
