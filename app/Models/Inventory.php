<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'component_type', 'component_id', 'stock_quantity',
    ];

    protected $casts = [
        'component_type' => 'string', // Or use an Enum
    ];
}
