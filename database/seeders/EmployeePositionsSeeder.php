<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EmployeePositionsSeeder extends Seeder {

    public function run() { 
        $definedEmployeePos = [
            [1, 1],
            [2, 2],
            [3, 3],
            [4, 4],
            [5, 5],
            [6, 6],
            [7, 7],
            [8, 8],
            [9, 9],
            [10, 10],
        ];

        foreach ($definedEmployeePos as $key => $value) {
            DB::table('employee_positions')->insert([
                'employee_id' => $value[0],
                'position_id' => $value[1], 
            ]);
        }
        
    }
}