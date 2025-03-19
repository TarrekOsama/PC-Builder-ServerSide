<?php

use App\Http\Controllers\API\MotherboardController;
use App\Http\Controllers\API\PsuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::apiResource('motherboards', MotherboardController::class);
Route::apiResource('psus', PsuController::class);