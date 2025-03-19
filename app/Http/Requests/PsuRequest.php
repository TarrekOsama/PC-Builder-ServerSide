<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PsuRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Adjust based on auth logic
    }

    public function rules(): array
    {
        $method = $this->method();

        if ($method === 'POST') {
            return [
                'name' => 'required|string|max:255',
                'brand' => 'required|string|max:255',
                'form_factor' => 'required|string|max:20',
                'wattage' => 'required|integer|min:1',
                'efficiency_rating' => 'required|in:80+ Bronze,80+ Silver,80+ Gold,80+ Platinum,80+ Titanium',
                'modularity' => 'required|string|max:50',
                'pcie_6_2_pin' => 'required|integer|min:0',
                'eps_8_pin' => 'required|integer|min:0',
                'length' => 'required|integer|min:1',
                'price' => 'required|numeric|min:0',
                'stock_quantity' => 'required|integer|min:0',
            ];
        }

        if ($method === 'PUT' || $method === 'PATCH') {
            return [
                'name' => 'sometimes|required|string|max:255',
                'brand' => 'sometimes|required|string|max:255',
                'form_factor' => 'sometimes|required|string|max:20',
                'wattage' => 'sometimes|required|integer|min:1',
                'efficiency_rating' => 'sometimes|required|in:80+ Bronze,80+ Silver,80+ Gold,80+ Platinum,80+ Titanium',
                'modularity' => 'sometimes|required|string|max:50',
                'pcie_6_2_pin' => 'sometimes|required|integer|min:0',
                'eps_8_pin' => 'sometimes|required|integer|min:0',
                'length' => 'sometimes|required|integer|min:1',
                'price' => 'sometimes|required|numeric|min:0',
                'stock_quantity' => 'sometimes|required|integer|min:0',
            ];
        }

        return [];
    }
}