<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class VideoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'url' => "https://player.vimeo.com/external/454633432.sd.mp4?s=3d7b5abd362a031678999d4fbb54e76bfbf66355&profile_id=164&oauth2_token_id=57447761",
        ];
    }
}
