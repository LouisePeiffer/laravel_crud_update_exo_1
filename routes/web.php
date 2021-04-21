<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\FrontController;
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

// FRONT
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/animalsList', [FrontController::class, 'animalsList'])->name('animalsList');

// BACK
// CRUD - Create
Route::get('/create/animal', [AnimalController::class, 'create'])->name('create.animal');
Route::post('/store/animal', [AnimalController::class, 'store'])->name('store.animal');

// CURD - Delete
Route::delete('/animal/{id}/delete', [AnimalController::class, 'destroy'])->name('destroy.animal');

// CRUD - Show
Route::get('/animal/{id}', [AnimalController::class, 'show'])->name('show.animal');

// CRUD - Edit
Route::get('animal/{id}/edit', [AnimalController::class, 'edit'])->name('edit.animal');
Route::put('animal/{id}/update', [AnimalController::class, 'update'])->name('update.animal');