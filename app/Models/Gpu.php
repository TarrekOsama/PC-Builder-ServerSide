<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gpu extends Model
{
    protected $fillable = [
        'name', 'brand', 'vram', 'length', 'width', 'slot_width',
        'tdp', 'pcie_version', 'power_connectors', 'ports', 'price',
        'stock_quantity', 'image_url',
    ];

    protected $casts = [
        'ports' => 'array',
    ];
}
