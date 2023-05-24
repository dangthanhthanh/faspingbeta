<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'description',
        'short_description',
        'active',
        'actived_updated_at',
        'image_id',
        'video_id',
        'user_id',
        'category_id',
        'created_at',
    ];
    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }
    public function image(){
        return $this->hasOne(Image::class,'id','image_id');
    }
    public function video(){
        return $this->hasOne(Video::class,'id','video_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
