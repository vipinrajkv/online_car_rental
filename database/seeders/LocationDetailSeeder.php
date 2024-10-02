<?php

namespace Database\Seeders;

use App\Models\LocationDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LocationDetail::factory()->count(20)->create();
    }
}
