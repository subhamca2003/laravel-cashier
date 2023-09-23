<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'name',
        'price',
        'hsn_code',
        'description',
        'short_description',
        'special_price',
        'url_key',
        'brand',
        'manufacturer_code',
    ];

    // Add any additional methods or relationships here if needed
}
