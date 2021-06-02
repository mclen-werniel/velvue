<?php

namespace Database\Seeders;

use App\Models\Salary;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SalarySeeder extends Seeder {

    public function run() {
        $definedPSalaries = [
            268121.00,
            182191.00,
            161231.00,
            142683.00,
            126267.00,
            111742.00,
            98886.00,
            48313.00,
            36628.00,
            39986.00
        ];

        foreach ($definedPSalaries as $key => $value) {
            DB::table('salaries')->insert([
                'salary' => $value,
            ]);
        }
    }
}