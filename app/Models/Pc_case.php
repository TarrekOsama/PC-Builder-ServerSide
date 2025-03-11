<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pc_case extends Model
{
    protected $fillable = [
        'name', 'brand', 'form_factor', 'max_gpu_length', 'max_cooler_height',
        'psu_form_factor', 'max_psu_length', 'drive_bays_3_5', 'drive_bays_2_5',
        'price', 'stock_quantity', 'image_url',
    ];
}
