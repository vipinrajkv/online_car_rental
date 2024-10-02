<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDetail>
 */
class UserDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::pluck('id');
        return [
            'user_id' => $user->random(), 
            'address' => fake()->address(),
            'city' => fake()->city(),
            'pincode' => fake()->postcode(),
            'photo' =>  fake()->image(public_path('images/user'),50,50, null, false),
            'aadhar_number' => fake()->unique()->numerify(),
            'driving_licence_number' => fake()->unique()->numerify(),
        ];
    }
}
