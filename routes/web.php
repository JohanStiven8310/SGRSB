<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\ServiciosController;

Route::middleware(['auth'])->group(function () {
    // Rutas para clientes
    Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
    Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create');
    Route::post('/clientes', [ClientesController::class, 'store'])->name('clientes.store');
    Route::get('/clientes/{cliente}/edit', [ClientesController::class, 'edit'])->name('clientes.edit');
    Route::put('/clientes/{cliente}', [ClientesController::class, 'update'])->name('clientes.update');
    Route::delete('/clientes/{cliente}', [ClientesController::class, 'destroy'])->name('clientes.destroy');

    // Rutas para reservas
    Route::get('/reservas', [ReservasController::class, 'index'])->name('reservas.index');
    // Implementa las demás rutas según sea necesario para reservas

    // Rutas para servicios
    Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios.index');
    Route::get('/servicios/create', [ServiciosController::class, 'create'])->name('servicios.create');
    Route::post('/servicios', [ServiciosController::class, 'store'])->name('servicios.store');
    Route::get('/servicios/{servicio}/edit', [ServiciosController::class, 'edit'])->name('servicios.edit');
    Route::put('/servicios/{servicio}', [ServiciosController::class, 'update'])->name('servicios.update');
    Route::delete('/servicios/{servicio}', [ServiciosController::class, 'destroy'])->name('servicios.destroy');
});
