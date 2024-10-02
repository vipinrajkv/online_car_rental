<?php

namespace Database\Seeders;

use App\Models\RentRate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RentRate::factory()->count(15)->create();
    }
}
