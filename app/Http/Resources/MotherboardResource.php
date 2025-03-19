<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MotherboardResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'brand' => $this->brand,
            'socket_type' => $this->socket_type,
            'form_factor' => $this->form_factor,
            'chipset' => $this->whenLoaded('chipset', fn () => $this->chipset->name),
            'ram_type' => $this->ram_type,
            'ram_slots' => $this->ram_slots,
            'max_ram_speed' => $this->max_ram_speed,
            'ram_voltage' => $this->ram_voltage,
            'pcie_version' => $this->pcie_version,
            'm2_slots' => $this->m2_slots,
            'sata_ports' => $this->sata_ports,
            'price' => $this->price,
            'stock_quantity' => $this->stock_quantity,
            'created_at' => $this->created_at->toIso8601String(),
            'updated_at' => $this->updated_at->toIso8601String(),
        ];
    }
}