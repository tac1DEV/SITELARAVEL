<?php

use Illuminate\Support\Facades\Route;


Route::get('/todo', [\App\Http\Controllers\TodoController::class, 'index'])->name('todo.index');
Route::post('/todo', [\App\Http\Controllers\TodoController::class, 'add'])->name('todo.add');
Route::delete('/todo/{todo}', [\App\Http\Controllers\TodoController::class, 'delete'])->name('todo.delete');
Route::get('/todo/{todo}', [\App\Http\Controllers\TodoController::class, 'view'])->name('todo.view');
Route::get('/todo/{todo}/update', [\App\Http\Controllers\TodoController::class, 'updateform'])->name('todo.updateform');
Route::post('/todo/{todo}/update', [\App\Http\Controllers\TodoController::class, 'update'])->name('todo.update');
