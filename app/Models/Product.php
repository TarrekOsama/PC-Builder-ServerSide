<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'brand', 'category', 'description', 'price', 'stock_quantity', 'image_url',
    ];

    protected $casts = [
        'category' => 'string', // Or use an Enum
    ];
}
