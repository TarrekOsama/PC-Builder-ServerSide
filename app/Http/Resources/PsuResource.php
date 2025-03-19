<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PsuResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'brand' => $this->brand,
            'form_factor' => $this->form_factor,
            'wattage' => $this->wattage,
            'efficiency_rating' => $this->efficiency_rating,
            'modularity' => $this->modularity,
            'pcie_6_2_pin' => $this->pcie_6_2_pin,
            'eps_8_pin' => $this->eps_8_pin,
            'length' => $this->length,
            'price' => $this->price,
            'stock_quantity' => $this->stock_quantity,
            'created_at' => $this->created_at->toIso8601String(),
            'updated_at' => $this->updated_at->toIso8601String(),
        ];
    }
}