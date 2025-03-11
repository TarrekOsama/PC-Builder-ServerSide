<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motherboard extends Model
{
    protected $fillable = [
        'name', 'brand', 'socket_type', 'form_factor', 'chipset_id',
        'ram_type', 'ram_slots', 'max_ram_speed', 'ram_voltage',
        'pcie_version', 'm2_slots', 'sata_ports', 'price', 'stock_quantity', 'image_url',
    ];

    // Relationships
    public function chipset()
    {
        return $this->belongsTo(Chipset::class);
    }
}
