<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Academica\Facultades;
use App\Http\Controllers\Academica\Programas;
use App\Http\Controllers\Academica\Docentes;
use App\Http\Controllers\Academica\Estudiantes;
use App\Http\Controllers\Academica\Materias;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'index']
)->middleware(['auth', 'verified'])->name('dashboard');

// Rutas Facultades
Route::get('/facultades/listado', [Facultades::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_facultades');

Route::get('/facultades/registrar', [Facultades::class, 'form_registro']
)->middleware(['auth', 'verified'])->name('form_registro_fac');

Route::post('/facultades/registrar', [Facultades::class, 'registrar']
)->middleware(['auth', 'verified'])->name('registrar_fac');

Route::get('/facultades/editar/{id}', [Facultades::class, 'form_edicion']
)->middleware(['auth', 'verified'])->name('editar_fac');

Route::post('/facultades/editar/{id}', [Facultades::class, 'editar']
)->middleware(['auth', 'verified'])->name('editar_facultad');

Route::get('/facultades/eliminar/{id}', [Facultades::class, 'eliminar']
)->middleware(['auth', 'verified'])->name('eliminar_fac');

// Rutas Programas
Route::get('/programas/listado', [Programas::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_programas');

// Rutas Estudiantes
Route::get('/estudiantes/listado', [Estudiantes::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_estudiantes');

// Rutas Docentes
Route::get('/docentes/listado', [Docentes::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_docentes');

// Rutas Materias
Route::get('/materias/listado', [Materias::class, 'index']
)->middleware(['auth', 'verified'])->name('listado_materias');








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
