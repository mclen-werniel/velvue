<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        // \App\Models\User::factory(10)->create();
        // DB::table('employees')->truncate();
        $this->call([
            EmployeeSeeder::class,
            DepartmentSeeder::class,
            PositionSeeder::class,
            SalarySeeder::class,
            StocksSeeder::class,
            EmployeeDepartmentsSeeder::class,
            EmployeePositionsSeeder::class,
            SalaryPositionsSeeder::class,
        ]);
    }
}
