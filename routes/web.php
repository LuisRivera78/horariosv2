<?php

use App\Models\Alumno;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PuestoController;

Route::get('/alumnos.index', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/alumnos.create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::get('/alumnos.edit/{alumno}', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::post('/alumnos.destroy/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
Route::get('/alumnos.show/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');
Route::post('/alumnos.update/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::post('/alumnos.store', [AlumnoController::class, 'store'])->name('alumnos.store');

Route::get('/puestos.index', [AlumnoController::class, 'index'])->name('puestos.index');
Route::get('/puestos.create', [AlumnoController::class, 'create'])->name('puestos.create');
Route::get('/puestos.edit/{puesto}', [AlumnoController::class, 'edit'])->name('puestos.edit');
Route::post('/puestos.destroy/{puesto}', [AlumnoController::class, 'destroy'])->name('puestos.destroy');
Route::post('/puestos.store', [AlumnoController::class, 'store'])->name('puestos.store');
Route::get('/puestos.show/{puesto}', [AlumnoController::class, 'show'])->name('puestos.show');
Route::post('/puestos.update/{puesto}', [AlumnoController::class, 'update'])->name('puestos.update');

Route::resource("puestos", PuestoController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
