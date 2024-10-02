<?php

namespace Database\Factories;

use App\Enums\FuelTypeEnum;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
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
        return [
            'car_name' => fake()->word(1, true),
            'car_details' => fake()->paragraph(),
            'category_id' => $categories->random(),
            'brand_id' => $bands->random(),
            'car_image' => fake()->image(public_path('images/cars'),700,420, null, false),
            'fuel_type' => fake()->randomElement(FuelTypeEnum::cases())->value,
            'model_year' => fake()->numberBetween(2015, 2024),
        ];
    }
}
