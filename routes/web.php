<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;


Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');
// Route::get('/', [RegistroController::class, 'create'])->name('registro');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::get('/', [RegistroController::class, 'create'])->name('registro');
    Route::get('/registro', [RegistroController::class, 'create'])->name('registro.create');
    Route::post('/registro', [RegistroController::class, 'store'])->name('registro.store');
    Route::get('/consultas', [RegistroController::class, 'index'])->name('registro.consulta');

    Route::get('/consultas/export', [RegistroController::class, 'exportExcel'])->name('registro.export');
});
