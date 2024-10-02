<?php

namespace Database\Factories;

use App\Enums\PaymentStatusEnum;
use App\Enums\PaymentTypeEnum;
use App\Models\Booking;
use App\Models\LocationDetail;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookingDetail>
 */
class BookingDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $booking = Booking::pluck('id');
        $user = User::pluck('id');
        $locationDetail = LocationDetail::pluck('id');
        return [
            'booking_id' => $booking->random(), 
            'user_id' => $user->random(),
            'location_detail_id' => $locationDetail->random(),
            'payment_type' => fake()->randomElement(PaymentTypeEnum::cases())->value,
            'payment_status' => fake()->randomElement(PaymentStatusEnum::cases())->value,
            'amount' => fake()->numberBetween(1000, 20000),
        ];
    }
}
