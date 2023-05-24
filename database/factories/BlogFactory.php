<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    public function definition(): array
    {
        return [
            "description" => "nha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau donha tui o dau do",
            "short_description" => "short_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_descriptionshort_description",
            "title" => fake()->name(),
            "active" => random_int(0,1),
            "actived_updated_at" => now(),
            "image_id" => random_int(1,100),
            "video_id" => random_int(1,100),
            "user_id" => random_int(1,20),
            "category_id" => random_int(10,110),
        ];
    }
}
