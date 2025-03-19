<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\MotherboardRequest;
use App\Http\Resources\MotherboardResource;
use App\Models\Motherboard;

class MotherboardController extends Controller
{
    public function index()
    {
        $motherboards = Motherboard::with('chipset')->get();
        return MotherboardResource::collection($motherboards);
    }

    public function store(MotherboardRequest $request)
    {
        $motherboard = Motherboard::create($request->validated());
        return new MotherboardResource($motherboard);
    }

    public function show($id)
    {
        $motherboard = Motherboard::with('chipset')->findOrFail($id);
        return new MotherboardResource($motherboard);
    }

    public function update(MotherboardRequest $request, $id)
    {
        $motherboard = Motherboard::findOrFail($id);
        $motherboard->update($request->validated());
        return new MotherboardResource($motherboard);
    }

    public function destroy($id)
    {
        $motherboard = Motherboard::findOrFail($id);
        $motherboard->delete();
        return response()->json(['message' => 'Motherboard deleted successfully'], 200);
    }
}