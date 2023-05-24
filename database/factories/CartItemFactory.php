<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CartItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            "quantity" => random_int(1,10),
            "product_id" => random_int(1,100),
            "user_id" => random_int(1,20),
        ];
    }
}
