<?php

namespace Database\Seeders;

use App\Models\Deparment;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DepartmentSeeder extends Seeder {

    public function run() {
        // $faker = Faker::create();
        $faker = Faker::create('fr_FR');

        for ($i=0; $i < 4; $i++) { 
            DB::table('departments')->insert([
                'name' => $faker->departmentName,
            ]);
        }
    }
}