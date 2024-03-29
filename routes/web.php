<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\TaskController;

Route::get('tasks', [TaskController::class, 'index']);
Route::get('taskEdit/{id}/', [TaskController::class, 'edit']);
Route::post('taskStore', [TaskController::class, 'store']);
Route::get('taskDelete/{id}', [TaskController::class, 'destroy']);