<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PsuRequest;
use App\Http\Resources\PsuResource;
use App\Models\Psu;

class PsuController extends Controller
{
    public function index()
    {
        $psus = Psu::all();
        return PsuResource::collection($psus);
    }

    public function store(PsuRequest $request)
    {
        $psu = Psu::create($request->validated());
        return new PsuResource($psu);
    }

    public function show($id)
    {
        $psu = Psu::findOrFail($id);
        return new PsuResource($psu);
    }

    public function update(PsuRequest $request, $id)
    {
        $psu = Psu::findOrFail($id);
        $psu->update($request->validated());
        return new PsuResource($psu);
    }

    public function destroy($id)
    {
        $psu = Psu::findOrFail($id);
        $psu->delete();
        return response()->json(['message' => 'PSU deleted successfully'], 200);
    }
}