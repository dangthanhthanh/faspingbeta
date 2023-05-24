<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'shops';
    protected $fillable = [
        'name',
        'short_decription',
        'active',
        'number_product_sale',
        'actived_updated_at',
        'shop_profile_id',
        'background_id',
        'category_id',
        'created_at',
        'deleted_at',
    ];
    public function shop_profile(){
        return $this->hasOne(ShopProfile::class,"id","shop_profile_id");
    }
    public function background(){
        return $this->hasOne(Image::class,"id","background_id");
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id',"id");
    }
    public function user(){
        return $this->belongsTo(User::class,"id");
    }
}
