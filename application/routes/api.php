<?php

use App\Http\Controllers\HealthCheckController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketExtraTypeController;
use App\Http\Controllers\TicketTypeController;
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
    'prefix' => 'ticket-type'
], function () {
    Route::get('', [TicketTypeController::class, 'index'])->name('ticket-type.index');
    Route::get('{ticketType}', [TicketTypeController::class, 'show'])->name('ticket-type.show');
    Route::post('', [TicketTypeController::class, 'create'])->name('ticket-type.create');
    Route::patch('{ticketType}', [TicketTypeController::class, 'update'])->name('ticket-type.update');
    Route::delete('{ticketType}', [TicketTypeController::class, 'delete'])->name('ticket-type.delete');
});

Route::group([
    'prefix' => 'ticket'
], function () {
    Route::get('', [TicketController::class, 'index'])->name('ticket.index');
    Route::get('{ticket}', [TicketController::class, 'show'])->name('ticket.show');
    Route::post('', [TicketController::class, 'create'])->name('ticket.create');
    Route::patch('{ticket}', [TicketController::class, 'update'])->name('ticket.update');
    Route::delete('{ticket}', [TicketController::class, 'delete'])->name('ticket.delete');
});

Route::group([
    'prefix' => 'ticket-extra-type'
], function () {
    Route::get('', [TicketExtraTypeController::class, 'index'])->name('ticket-extra-type.index');
    Route::get('{ticketExtraType}', [TicketExtraTypeController::class, 'show'])->name('ticket-extra-type.show');
    Route::post('', [TicketExtraTypeController::class, 'create'])->name('ticket-extra-type.create');
    Route::patch('{ticketExtraType}', [TicketExtraTypeController::class, 'update'])->name('ticket-extra-type.update');
    Route::delete('{ticketExtraType}', [TicketExtraTypeController::class, 'delete'])->name('ticket-extra-type.delete');
});
