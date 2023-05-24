<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DistrictFactory extends Factory
{
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "city_id" => random_int(1,10),
        ];
    }
}
