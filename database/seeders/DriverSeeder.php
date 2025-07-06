<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Driver;
use Carbon\Carbon;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Driver::insert([
            [
                'region_id' => 1,
                'name' => 'Budi Santoso',
                'email' => 'budi.santoso@example.com',
                'phone' => '081234567890',
                'license_number' => 'SIM123456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'region_id' => 2,
                'name' => 'Siti Aminah',
                'email' => 'siti.aminah@example.com',
                'phone' => '082345678901',
                'license_number' => 'SIM223456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'region_id' => 3,
                'name' => 'Andi Wijaya',
                'email' => 'andi.wijaya@example.com',
                'phone' => '083456789012',
                'license_number' => 'SIM323456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'region_id' => 1,
                'name' => 'Dewi Lestari',
                'email' => 'dewi.lestari@example.com',
                'phone' => '084567890123',
                'license_number' => 'SIM423456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'region_id' => 2,
                'name' => 'Agus Prabowo',
                'email' => 'agus.prabowo@example.com',
                'phone' => '085678901234',
                'license_number' => 'SIM523456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
