<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();
Route::get('/usuarios', [App\Http\Controllers\UsersController::class, 'index'])->name('usuarios');

Route::get('/tareas', [App\Http\Controllers\TaskController::class, 'index'])->name('tareas');
Route::get('/tareas/create', [App\Http\Controllers\TaskController::class, 'create'])->name('tareas.create');
Route::post('/tareas', [App\Http\Controllers\TaskController::class, 'store'])->name('tareas.store');
Route::get('/tareas/{id}/edit', [App\Http\Controllers\TaskController::class, 'edit'])->name('tareas.edit');
Route::post('/tareas/{id}', [App\Http\Controllers\TaskController::class, 'update'])->name('tareas.update');
Route::get('/tareas/{id}/delete', [App\Http\Controllers\TaskController::class, 'destroy'])->name('tareas.destroy');

Route::get('/inicio', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

