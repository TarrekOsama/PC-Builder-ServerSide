<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Psu extends Model
{
    protected $fillable = [
        'name', 'brand', 'form_factor', 'wattage', 'efficiency_rating',
        'modularity', 'pcie_6_2_pin', 'eps_8_pin', 'length', 'price',
        'stock_quantity', 'image_url',
    ];
}
