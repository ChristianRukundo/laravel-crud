<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {


        return [
            'title' => fake()->word(),
            'description' => fake()->word(),
            'imgUrl' => fake()->word(),
            'price' => fake()->numberBetween(1, 400),
            'category' => fake()->word(),
        ];
    }
}
