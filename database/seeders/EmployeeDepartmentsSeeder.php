<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EmployeeDepartmentsSeeder extends Seeder {

    public function run() { 
        $definedEmployeeDepts = [
            [1, 1],
            [2, 2],
            [3, 1],
            [4, 3],
            [5, 2],
            [6, 3],
            [7, 1],
            [8, 4],
            [9, 4],
            [10, 4],
        ];

        foreach ($definedEmployeeDepts as $key => $value) {
            DB::table('employee_departments')->insert([
                'employee_id' => $value[0],
                'department_id' => $value[1], 
            ]);
        }
        
    }
}