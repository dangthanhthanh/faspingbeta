<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JunctionGroupsPartners extends Model
{
    use HasFactory;
    protected $table = 'junction_groups_partners';
    protected $fillable = [
        'group_id',
        'object_id',
    ];
}
