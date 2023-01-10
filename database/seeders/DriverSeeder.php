<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Driver;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=7; $i++) {
            $driver = new Driver();
            $driver->full_name = fake()->name();
            $driver->car_id = $i;
            $driver->save();
        }
    }
}
