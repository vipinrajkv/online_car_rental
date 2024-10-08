<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BookingDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            BrandSeeder::class,
            CarSeeder::class,
            LocationDetailSeeder::class,
            LocationDetailSeeder::class,
            RentRateSeeder::class,
            BookingSeeder::class,
            BookingDetailSeeder::class,
            UserDetailSeeder::class,
        ]);
    }
}
