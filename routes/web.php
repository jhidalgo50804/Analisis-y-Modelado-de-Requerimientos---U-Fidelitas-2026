<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemaController;

Route::get('/', [SistemaController::class, 'login']);
Route::get('/login', [SistemaController::class, 'login'])->name('login');
Route::get('/dashboard', [SistemaController::class, 'dashboard'])->name('dashboard');
Route::get('/proyectos', [SistemaController::class, 'proyectos'])->name('proyectos.index');
Route::get('/proyectos/crear', [SistemaController::class, 'crearProyecto'])->name('proyectos.create');
Route::get('/proyectos/detalle', [SistemaController::class, 'detalleProyecto'])->name('proyectos.show');

Route::get('/evaluacion', [SistemaController::class, 'evaluacion'])->name('evaluacion');
Route::get('/aprobacion', [SistemaController::class, 'aprobacion'])->name('aprobacion');
Route::get('/tareas', [SistemaController::class, 'tareas'])->name('tareas');
Route::get('/documentos', [SistemaController::class, 'documentos'])->name('documentos');
Route::get('/bitacora', [SistemaController::class, 'bitacora'])->name('bitacora');

Route::get('/usuarios', [SistemaController::class, 'usuarios'])->name('usuarios');
Route::get('/priorizacion', [SistemaController::class, 'priorizacion'])->name('priorizacion');
Route::get('/presupuesto', [SistemaController::class, 'presupuesto'])->name('presupuesto');
Route::get('/seguimiento', [SistemaController::class, 'seguimiento'])->name('seguimiento');
Route::get('/reportes', [SistemaController::class, 'reportes'])->name('reportes');