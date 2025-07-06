<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::insert([
            [
                'owner_id' => 1,
                'region_id' => 1,
                'license_plate' => 'B 1234 XY',
                'type' => 'SUV',
                'brand' => 'Toyota',
                'year' => 2022,
                'status' => 'available',
                'is_rented' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'owner_id' => 2,
                'region_id' => 2,
                'license_plate' => 'D 5678 AB',
                'type' => 'Truck',
                'brand' => 'Mitsubishi',
                'year' => 2020,
                'status' => 'available',
                'is_rented' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'owner_id' => 3,
                'region_id' => 1,
                'license_plate' => 'L 2345 CD',
                'type' => 'Pickup',
                'brand' => 'Isuzu',
                'year' => 2021,
                'status' => 'available',
                'is_rented' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'owner_id' => 1,
                'region_id' => 3,
                'license_plate' => 'F 8765 EF',
                'type' => 'Minibus',
                'brand' => 'Daihatsu',
                'year' => 2019,
                'status' => 'booked',
                'is_rented' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'owner_id' => 4,
                'region_id' => 2,
                'license_plate' => 'H 3456 GH',
                'type' => 'SUV',
                'brand' => 'Honda',
                'year' => 2023,
                'status' => 'available',
                'is_rented' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
