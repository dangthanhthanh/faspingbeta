<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    public function definition(): array
    {   $array=[276,286,102,118,128,167,175,176,177,187,188,190,202,226,237];
        return [
            "price" => random_int(1,100)*1.00,
            "quantity" => random_int(1,10),
            "product_id" => random_int(1,100),
            "order_list_id" => random_int(1,100),
            // "order_list_id" => $array[random_int(0,14)],
        ];
    }
}
