<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'area_id',
        'genre_id',
        'shop_name',
        'shop_photo',
        'shop_comment'
    ];
}
