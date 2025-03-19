<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MotherboardRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Adjust based on your auth logic (e.g., return auth()->check())
    }

    public function rules(): array
    {
        $method = $this->method();

        if ($method === 'POST') {
            return [
                'name' => 'required|string|max:255',
                'brand' => 'required|string|max:255',
                'socket_type' => 'required|string|max:50',
                'form_factor' => 'required|string|max:50',
                'chipset_id' => 'required|exists:chipsets,id',
                'ram_type' => 'required|string|max:50',
                'ram_slots' => 'required|integer|min:1',
                'max_ram_speed' => 'required|integer|min:1',
                'ram_voltage' => 'required|numeric|min:0',
                'pcie_version' => 'required|string|max:10',
                'm2_slots' => 'required|integer|min:0',
                'sata_ports' => 'required|integer|min:0',
                'price' => 'required|numeric|min:0',
                'stock_quantity' => 'required|integer|min:0',
            ];
        }

        if ($method === 'PUT' || $method === 'PATCH') {
            return [
                'name' => 'sometimes|required|string|max:255',
                'brand' => 'sometimes|required|string|max:255',
                'socket_type' => 'sometimes|required|string|max:50',
                'form_factor' => 'sometimes|required|string|max:50',
                'chipset_id' => 'sometimes|required|exists:chipsets,id',
                'ram_type' => 'sometimes|required|string|max:50',
                'ram_slots' => 'sometimes|required|integer|min:1',
                'max_ram_speed' => 'sometimes|required|integer|min:1',
                'ram_voltage' => 'sometimes|required|numeric|min:0',
                'pcie_version' => 'sometimes|required|string|max:10',
                'm2_slots' => 'sometimes|required|integer|min:0',
                'sata_ports' => 'sometimes|required|integer|min:0',
                'price' => 'sometimes|required|numeric|min:0',
                'stock_quantity' => 'sometimes|required|integer|min:0',
            ];
        }

        return [];
    }
}