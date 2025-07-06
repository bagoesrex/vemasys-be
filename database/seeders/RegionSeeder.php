<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Region;
use Carbon\Carbon;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        Region::insert([
            [
                'name' => 'Head Office',
                'address' => $faker->address,
                'type' => 'center',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Branch Office',
                'address' => $faker->address,
                'type' => 'branch',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Site A',
                'address' => $faker->address,
                'type' => 'branch',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Site B',
                'address' => $faker->address,
                'type' => 'branch',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Warehouse',
                'address' => $faker->address,
                'type' => 'branch',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
