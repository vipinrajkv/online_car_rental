<?php

namespace Database\Factories;

use App\Enums\BookingStatusEnum;
use App\Enums\FuelTypeEnum;
use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::pluck('id');
        $cars = Car::pluck('id');
        return [
            'car_id' => $cars->random(), 
            'booking_from' => now()->addDay(rand(1,5))->format('Y-m-d'),
            'booking_to' => now()->addDay(rand(5,10))->format('Y-m-d'),
            'user_id' => $user->random(),
            'booking_status' => fake()->randomElement(BookingStatusEnum::cases())->value,
        ];
    }
}
