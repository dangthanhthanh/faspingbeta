<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'url' => "https://www.shutterstock.com/image-photo/portrait-mixed-race-alternative-woman-600w-1895481898.jpg",
        ];
    }
}
