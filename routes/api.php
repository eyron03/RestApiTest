<?php

use App\Http\Controllers\ProductController;
use App\Interfaces\StudentInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('/products', ProductController::class);

Route::apiResource('/students',StudentInterface::class);
