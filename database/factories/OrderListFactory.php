<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderListFactory extends Factory
{
    
    public function definition(): array
    {
        $status=["dang cho xac nhan","dang luu kho","dang giao hang","da giao hang","da nhan hang","cho huy don","da huy don","cho tra hang","da tra hang","hoan thanh"];
        return [
            "decription" => "co nhu kong ma thoi",
            "status" => $status[random_int(0,9)],
            "user_id" => random_int(1,20),
            "address_id" => random_int(1,100),
            "created_at" => fake()->datetimeBetween('-2 years', 'now'),
        ];
    }
}
