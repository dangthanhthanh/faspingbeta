<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'decription',
        'short_decription',
        'active',
        'actived_updated_at',
        'sale',
        'storage',
        'discount_price',
        'shop_id',
        'image_id',
        'category_id',
        'created_at',
        'deleted_at',
    ];
    public function shop(){
        return $this->belongsTo(Shop::class,'shop_id','id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function image(){
        return $this->hasOne(Image::class,'id','image_id');
    }
}
