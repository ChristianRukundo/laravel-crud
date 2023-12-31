<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ReadyMealSeeder::class);
        $this->call(IngredientSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
