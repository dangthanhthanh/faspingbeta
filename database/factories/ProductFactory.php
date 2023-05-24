<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "decription" => "decription,decription,decription,decription,decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription decription ",
            "short_decription" => "short_decription,short_decription,short_decription,short_decription,short_decription",
            "active" => random_int(0,1),
            "actived_updated_at" => fake()->dateTime(),
            "sale" => random_int(0,1000),
            "storage" => random_int(0,1000),
            "price" => random_int(0,1000),
            "discount_price" => random_int(0,100),
            "shop_id" => random_int(1,20),
            "image_id" => random_int(1,100),
            "category_id" => random_int(10,100),
        ];
    }
}
