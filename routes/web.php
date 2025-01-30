<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Página principal redirige al listado de tareas
Route::get('/', function () {
    return redirect()->route('tasks.index'); // Redirige a la ruta tasks.index
});

// Rutas para el recurso de tareas
Route::resource('tasks', TaskController::class);

// Ruta adicional para cambiar el estado de completado
Route::post('tasks/{task}/toggle', [TaskController::class, 'toggleComplete'])->name('tasks.toggle');
