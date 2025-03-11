<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    protected $fillable = [
        'name', 'brand', 'screen_size', 'resolution', 'refresh_rate',
        'response_time', 'panel_type', 'ports', 'gpu_compatibility',
        'price', 'stock_quantity', 'image_url',
    ];

    protected $casts = [
        'ports' => 'array',
        'gpu_compatibility' => 'array',
        'panel_type' => 'string', // Or use an Enum
    ];
}
