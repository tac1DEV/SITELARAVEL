<?php

use Illuminate\Support\Facades\Route;


Route::get('/todo', [\App\Http\Controllers\TodoController::class, 'index'])->name('todo.index');
Route::post('/todo', [\App\Http\Controllers\TodoController::class, 'add'])->name('todo.add');
