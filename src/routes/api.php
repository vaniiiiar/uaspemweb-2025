<?php

use App\Http\Controllers\Api\AlumniController;
use App\Livewire\Alumni;
use Illuminate\Support\Facades\Route;

Route::prefix('alumni')->middleware('apikey')->group(function () {
    Route::get('/', [AlumniController::class, 'index']);
    Route::post('/decrypt', [AlumniController::class, 'decryptResponse']);
    Route::get('{id}', [AlumniController::class, 'show']);
    Route::post('/', [AlumniController::class, 'store']);
    Route::put('{id}', [AlumniController::class, 'update']);
    Route::delete('{id}', [AlumniController::class, 'destroy']);
});