<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    protected $fillable = [
        'name', 'brand', 'type', 'speed', 'size_per_stick', 'quantity',
        'voltage', 'cas_latency', 'price', 'stock_quantity', 'image_url',
    ];
}
