<?php

use App\Http\Controllers\HealthCheckController;
use App\Http\Controllers\TicketController;
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

/*
 |-----------------------------------------------------------------------------
 | MODEL ENDPOINTS
 |-----------------------------------------------------------------------------
 | Routes dedicated to models
 */
Route::group([
    'prefix' => 'ticket'
], function () {
    Route::get('', [TicketController::class, 'index'])->name('ticket.index');
    Route::get('{ticket}', [TicketController::class, 'show'])->name('ticket.show');
    Route::post('', [TicketController::class, 'create'])->name('ticket.create');
    Route::patch('{ticket}', [TicketController::class, 'update'])->name('ticket.update');
    Route::delete('{ticket}', [TicketController::class, 'delete'])->name('ticket.delete');
});
