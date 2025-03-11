<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chipset extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'supported_socket',
        'pcie_version',
        'overclocking_support',
    ];

    protected $casts = [
        'overclocking_support' => 'boolean',
    ];

    // Relationships
    public function motherboards()
    {
        return $this->hasMany(Motherboard::class);
    }

    public function cpus()
    {
        return $this->belongsToMany(Cpu::class);
    }
}
