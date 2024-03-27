<?php

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/car', function () {
    return Car::all();
});

Route::post('/car', function (Request $request) {
    $car = Car::create([
        "license_plate_number" => $request->license_plate_number,
        "brand" => $request->brand,
        "model" => $request->model,
        "year_of_manufacture" => $request->year_of_manufacture,
        "fuel_type" => $request->fuel_type,
    ]);
    return $car;
});
