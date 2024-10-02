<?php

namespace Database\Seeders;

use App\Models\BookingDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BookingDetail::factory()->count(50)->create();
    }
}
