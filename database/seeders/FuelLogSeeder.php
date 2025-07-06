<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\FuelLog;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FuelLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FuelLog::insert([
            [
                'vehicle_id' => 1,
                'log_date' => Carbon::today(),
                'odometer' => 12000,
                'fuel_amount' => 30.5,
            ],
            [
                'vehicle_id' => 2,
                'log_date' => Carbon::today()->subDays(1),
                'odometer' => 8750,
                'fuel_amount' => 28.0,
            ],
            [
                'vehicle_id' => 3,
                'log_date' => Carbon::today()->subDays(2),
                'odometer' => 15200,
                'fuel_amount' => 35.7,
            ],
            [
                'vehicle_id' => 1,
                'log_date' => Carbon::today()->subDays(3),
                'odometer' => 12350,
                'fuel_amount' => 32.1,
            ],
            [
                'vehicle_id' => 4,
                'log_date' => Carbon::today()->subDays(4),
                'odometer' => 9400,
                'fuel_amount' => 29.3,
            ],
            [
                'vehicle_id' => 5,
                'log_date' => Carbon::today()->subDays(5),
                'odometer' => 17600,
                'fuel_amount' => 40.0,
            ],
            [
                'vehicle_id' => 3,
                'log_date' => Carbon::today()->subDays(6),
                'odometer' => 15500,
                'fuel_amount' => 33.5,
            ],
            [
                'vehicle_id' => 2,
                'log_date' => Carbon::today()->subDays(7),
                'odometer' => 9000,
                'fuel_amount' => 26.7,
            ],
            [
                'vehicle_id' => 4,
                'log_date' => Carbon::today()->subDays(8),
                'odometer' => 9700,
                'fuel_amount' => 31.2,
            ],
            [
                'vehicle_id' => 5,
                'log_date' => Carbon::today()->subDays(9),
                'odometer' => 18000,
                'fuel_amount' => 38.8,
            ],
        ]);
    }
}
