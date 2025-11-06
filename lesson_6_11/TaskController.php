<?php

namespace lesson_6_11;

use App\Http\Controllers\Controller;
use App\Models\Task;

class TaskController extends Controller
{
  public function index()
  {
      $tasks = Task::with('client', 'manager')
          ->orderBy('id', 'desc')
          ->limit(10)->get();

      return view('admin.tasks_demo.index', compact('tasks'));
  }
}
