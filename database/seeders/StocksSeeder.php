<?php

namespace Database\Seeders;

use App\Models\Stocks;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StocksSeeder extends Seeder {

    public function run() {
        DB::table('stocks')->insert([
            'value' => 30.00,
        ]);
    }
}