<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make("123456789"),
            "roles" => 0,
            "active" => 1,
            "actived_updated_at" => now(),
            "avatar_id" => random_int(1,100),
            'remember_token' => Str::random(10),
            "profile_id" => random_int(1,20),
            "shop_id" => random_int(1,20),
        ];
    }

    
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
