<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function allTasks()
    {
        try {
            $tasks = Task::all();
            return response()->json($tasks, 200);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function createTask(Request $request)
    {
        try {
            $task = Task::create($request->all());
            return response()->json($task, 201);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function updateTask($id, Request $request)
    {
        try {
            $task = Task::findOrFail($id);
            $task->update($request->all());
            return response()->json($task, 200);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 500);
        }
    }

    public function deleteTask($id)
    {
        try {
            $task = Task::findOrFail($id);
            $task->delete();
            return response()->json($task);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 200);
        }
    }
}
