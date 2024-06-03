<?php

use App\Http\Controllers\HealthCheckController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/*
 |-----------------------------------------------------------------------------
 | HEALTH CHECKS
 |-----------------------------------------------------------------------------
 | Routes dedicated to health checks and debugging
 */
Route::group([
    'prefix' => 'health-check'
], function () {
    Route::get('', [HealthCheckController::class, 'check']);
});
