<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class IngredientsFactory extends Factory
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
            'link' => fake()->word(),
            'name' => fake()->name(),
            'quantity' => fake()->numberBetween(1, 200),


        ];
    }
}
