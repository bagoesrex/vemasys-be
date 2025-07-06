<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VehicleOwner;
use Carbon\Carbon;

class VehicleOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VehicleOwner::insert([
            [
                'name' => 'Company Owned',
                'type' => 'owned',
                'contact_info' => '123-456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Rental Co.',
                'type' => 'rented',
                'contact_info' => '789-000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'PT Armada Nusantara',
                'type' => 'rented',
                'contact_info' => '021-88997766',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'CV Sumber Jaya',
                'type' => 'rented',
                'contact_info' => '0821-33445566',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Kendaraan Internal',
                'type' => 'owned',
                'contact_info' => 'ext 205',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
