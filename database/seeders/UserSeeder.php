<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
            'regions_id' => 1,
        ]);

        User::create([
            'name' => 'Manager',
            'email' => 'manager@example.com',
            'password' => bcrypt('manager'),
            'role' => 'approver_1',
            'regions_id' => 1,
        ]);

        User::create([
            'name' => 'Supervisor',
            'email' => 'supervisor@example.com',
            'password' => bcrypt('supervisor'),
            'role' => 'approver_2',
            'regions_id' => 1,
        ]);
    }
}
