<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
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
        	DB::table('employees')->insert([
        		'department_id'    => rand(1,10),
        		'name'             => $faker-> name,
        		'job_title'        => $faker-> jobTitle,
                'phone'        => $faker-> tollFreePhoneNumber,
        		'email'            => $faker-> freeEmail,
        		'created_at'       => Carbon\Carbon::now()
        	]);
        }
    }
}
