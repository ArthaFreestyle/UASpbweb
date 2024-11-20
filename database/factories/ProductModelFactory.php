<?php

namespace Database\Factories;

use App\Models\ProductModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductModel>
 */
class ProductModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' => fake()->word(),
            'product_image' => '',
            'description' => fake()->text(120),
            'price' => fake()->numberBetween(10000,100000),
            'stock' => fake()->numberBetween(1,100),
            'category_id' => fake()->numberBetween(1,5)
        ];
    }
}
