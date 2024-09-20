<?php

use App\Models\Worker;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkersController;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource("/api/workers", WorkersController::class);
