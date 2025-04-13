<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\OrganizadorController;
use App\Http\Controllers\ParticipacionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//         return redirect()->route('eventos.index')->with('success', 'Evento eliminado exitosamente.');

// Rutas de recursos para nuestras entidades
    Route::resource('eventos', EventoController::class);
    Route::resource('organizadores', OrganizadorController::class);
    Route::resource('participaciones', ParticipacionController::class);
});

require __DIR__.'/auth.php';