<?php

namespace Database\Seeders;

use App\Models\VehicleService;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class VehicleServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VehicleService::insert([
            [
                'vehicle_id' => 1,
                'service_date' => Carbon::today()->subDays(10),
                'cost' => 150000,
                'service_type' => 'Oil Change',
                'description' => 'Routine oil change',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'vehicle_id' => 2,
                'service_date' => Carbon::today()->subDays(20),
                'cost' => 300000,
                'service_type' => 'Brake Inspection',
                'description' => 'Brake pads replaced',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'vehicle_id' => 3,
                'service_date' => Carbon::today()->subDays(5),
                'cost' => 250000,
                'service_type' => 'Tire Rotation',
                'description' => 'Front and rear tires rotated',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'vehicle_id' => 4,
                'service_date' => Carbon::today()->subDays(15),
                'cost' => 400000,
                'service_type' => 'Engine Tune-Up',
                'description' => 'Spark plugs and filters replaced',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'vehicle_id' => 5,
                'service_date' => Carbon::today()->subDays(7),
                'cost' => 180000,
                'service_type' => 'Battery Check',
                'description' => 'Battery tested and terminals cleaned',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
