<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = 'addresses';
    protected $fillable = [
        'address',
        'dictrict_id',
        'status',
    ];
    public function district(){
        return $this->belongsTo(District::class,"dictrict_id","id");
    }
}
