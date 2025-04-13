<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\OrganizadorController;
use App\Http\Controllers\ParticipacionController;


Route::middleware(['auth'])->group(function () {
    Route::resource('eventos', EventoController::class);
    Route::resource('organizadores', OrganizadorController::class);
    Route::resource('participaciones', ParticipacionController::class);
});
