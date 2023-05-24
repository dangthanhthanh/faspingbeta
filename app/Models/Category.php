<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'slug',
        'image_id',
        'category_id',
        'deleted_at',
    ];
    public function product(){
        return $this->hasMany(Product::class,'category_id');
    }
    public function image(){
        return $this->hasMany(Image::class,'image_id','id');
    }
    public function category(){
        return $this->belongsTo(Category::class,"category_id");
    }
}
