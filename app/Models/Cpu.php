<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cpu extends Model
{
    protected $fillable = [
        'name', 'brand', 'socket_type', 'cores', 'threads', 'base_clock',
        'boost_clock', 'tdp', 'pcie_version', 'integrated_gpu', 'l3_cache',
        'price', 'stock_quantity', 'image_url',
    ];

    protected $casts = [
        'integrated_gpu' => 'boolean',
    ];

    // Relationships
    public function chipsets()
    {
        return $this->belongsToMany(Chipset::class);
    }
}
