<?php

use Illuminate\Database\Seeder;

class EmployeeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             EmployeePositionTableSeeder::class,
             EmployeeTableSeeder::class
         ]);
    }
}
