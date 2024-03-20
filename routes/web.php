<?php

use App\Http\Controllers\PersonasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;

// Rutas de autenticación
Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.index');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('login.destroy');

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');

// Rutas de PersonasController
Route::get('/personas', [PersonasController::class, 'index'])->name('personas.index');
Route::get('/personas/create', [PersonasController::class, 'create'])->name('personas.create');
Route::post('/personas/store', [PersonasController::class, 'store'])->name('personas.store');
Route::get('/personas/edit/{id}', [PersonasController::class, 'edit'])->name('personas.edit');
Route::put('/personas/update/{id}', [PersonasController::class, 'update'])->name('personas.update');
Route::get('/personas/show/{id}', [PersonasController::class, 'show'])->name('personas.show');
Route::delete('/personas/destroy/{id}', [PersonasController::class, 'destroy'])->name('personas.destroy');