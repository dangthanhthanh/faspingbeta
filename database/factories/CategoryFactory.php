<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "slug" => fake()->name()."-".fake()->name(),
            "image_id" => random_int(1,100),
            // "category_id" => null,
            "category_id" => random_int(1,10),
        ];
    }
}
