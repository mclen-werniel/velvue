<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SalaryPositionsSeeder extends Seeder {

    public function run() { 
        $definedPositionSalaries = [
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

        foreach ($definedPositionSalaries as $key => $value) {
            DB::table('salary_positions')->insert([
                'salary_id' => $value[0],
                'position_id' => $value[1], 
            ]);
        }
        
    }
}