<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JunctionBlogsCategories extends Model
{
    use HasFactory;
    protected $table = 'junction_blogs_categories';
    protected $fillable = [
        'blog_id',
        'category_id',
    ];
}
