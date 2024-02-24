<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'tasks'], function () {
    Route::get('/', [TaskController::class, 'allTasks']); // Get All Tasks
    Route::post('/create', [TaskController::class, 'createTask']); // Create Task
    Route::put('/update/{id}', [TaskController::class, 'updateTask']); // Update Task
    Route::delete('/delete/{id}', [TaskController::class, 'deleteTask']); // Delete Task
});
