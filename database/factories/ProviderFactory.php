<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProviderFactory extends Factory
{
    public function definition(): array
    {
        return [
            "google_id" => Str::random(10),
            "facebook_id" => Str::random(10),
        ];
    }
}
