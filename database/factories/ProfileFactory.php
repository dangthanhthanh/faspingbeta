<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class ProfileFactory extends Factory
{
    public function definition(): array
    {
        return [
            "first_name" => fake()->firstname(),
            "last_name" => fake()->lastName(),
            "birth_date" => fake()->date(),
            "phone_number" => Str::random(10),
            "address_id" => random_int(1,100),
            "shopping_point" => random_int(1,1000),
        ];
    }
}
