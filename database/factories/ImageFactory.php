<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'url' => "https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg",
            "object_id"=>Str::random(10),
        ];
    }
}
