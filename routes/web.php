<?php


use App\Http\Controllers\EventoController;
use App\Http\Controllers\OrganizadorController;
use App\Http\Controllers\ParticipacionController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::resource('eventos', EventoController::class);
    Route::resource('organizadores', OrganizadorController::class);
    Route::resource('participaciones', ParticipacionController::class);
});
