<?php

namespace Database\Seeders;

use App\Models\Employee;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EmployeeSeeder extends Seeder {

    public function run() {
        $faker = Faker::create();

        for ($i=0; $i < 10; $i++) { 
            DB::table('employees')->insert([
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'address' => $faker->address(),
                'email_address' => $faker->companyEmail(),  
                'sex' => 'M'
            ]);
        }
    }
}