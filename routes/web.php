<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

Route::prefix('api')->group(function () {
        Route::prefix('appointments')->group(function () {
        Route::get('/', [AppointmentController::class, 'index']);           // GET    /api/appointments
        Route::post('/', [AppointmentController::class, 'store']);          // POST   /api/appointments
        Route::get('/{appointment}', [AppointmentController::class, 'show']); // GET    /api/appointments/{id}
        Route::put('/{appointment}', [AppointmentController::class, 'update']); // PUT    /api/appointments/{id}
        Route::delete('/{appointment}', [AppointmentController::class, 'destroy']); // DELETE /api/appointments/{id}
    });
}); 