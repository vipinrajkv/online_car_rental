<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RentRate>
 */
class RentRateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = Category::pluck('id');
        $bands = Brand::pluck('id');
        $cars = Car::pluck('id');
        return [
            'category_id' =>  $categories->random(),
            'brand_id' => $bands->random(),
            'car_id' => $cars->random(),
            'rate_per_hr' => fake()->numberBetween(100, 2000),
            'rate_per_day' => fake()->numberBetween(1000, 5000),
        ];
    }
}
