<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TasksController extends Controller
{
    // show all available tasks
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index',compact('tasks'));
    }

    // Show specific task
    public function show(Task $task)
    {
        return view('tasks.show',compact('task'));
    }
}
