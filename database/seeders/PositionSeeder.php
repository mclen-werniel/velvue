<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PositionSeeder extends Seeder {

    public function run() {
        $definedPositions = [
            'Avionics Development Technician',
            'Lab Manager',
            'Sr. Sensor Process Engineer',
            'Build Reliability Engineer',
            'Quality Inspector',
            'Technical Trainer',
            'Development Test Specialist',
            'Accountant',
            'Administrative Assistant',
            'HR Systems Analyst'
        ];

        foreach ($definedPositions as $key => $value) {
            DB::table('positions')->insert([
                'name' => $value,
            ]);
        }
    }
}