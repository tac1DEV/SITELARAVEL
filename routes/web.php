<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd('oui');
    return view('welcome');
});


Route::get('/todos', [\App\Http\Controllers\TodoController::class, "index"])->name('todos.index');
Route::post('/todos', [\App\Http\Controllers\TodoController::class, "save"])->name('todos.save');


