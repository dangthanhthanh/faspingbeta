<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    public function definition(): array
    {
        return [
            "user_id" => random_int(1,20),
            "content" => "content con tentcon tent contentcont entcon tentcontent",
            "date_time" => fake()->dateTime(),
        ];
    }
}
