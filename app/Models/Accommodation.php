<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','type','address','phone','website','price_range_min','price_range_max','distance_km','lat','lng','amenities','photo_path','status'
    ];

    protected $casts = [
        'amenities' => 'array',
        'price_range_min' => 'integer',
        'price_range_max' => 'integer',
        'distance_km' => 'decimal:2',
        'lat' => 'decimal:6',
        'lng' => 'decimal:6',
    ];
}
