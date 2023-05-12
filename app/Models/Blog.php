<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = [
        'description',
        'short_description',
        'active',
        'actived_at',
        'object_id',
        'image_id',
        'video_id',
    ];
}
