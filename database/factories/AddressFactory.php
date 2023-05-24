<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    public function definition(): array
    {
        return [
            "address" => "nha tui o dau do",
            "dictrict_id" => random_int(1,100),
            "status" => 1,
        ];
    }
}
