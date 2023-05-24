<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ShopProfileFactory extends Factory
{
    public function definition(): array
    {
        return [
            "phone_number" => Str::random(10),
            "time_reps" => random_int(0,3600),
            "online_last_time" => fake()->time(),
            "address_id" => random_int(1,10),
        ];
    }
}
