<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\OrderController;
use App\Services\GeminiService;

Route::get('/', function () {
    return redirect('/setup');
});

// Setup Wizard Routes
Route::get('/setup', [SetupController::class, 'show']);
Route::post('/setup', [SetupController::class, 'store']);

// Order / QR Menu Routes
Route::get('/t/{table}', [OrderController::class, 'showMenu']);
Route::post('/orders', [OrderController::class, 'store']);

// Kitchen Display Screen (KDS)
Route::get('/kds', [OrderController::class, 'kds']);
Route::patch('/orders/{id}/status', [OrderController::class, 'updateStatus']);
Route::post('/seed-menu', [OrderController::class, 'seedMenu']);

// AI Test Route
Route::get('/ai-test', function (GeminiService $gemini) {
    return $gemini->generate('Say hello in Manglish for a local cafe order system!');
});
