<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    protected $fillable = [
        'name', 'brand', 'type', 'capacity', 'interface', 'form_factor',
        'read_speed', 'write_speed', 'price', 'stock_quantity', 'image_url',
    ];

    protected $casts = [
        'type' => 'string', // Or use an Enum
    ];
}
