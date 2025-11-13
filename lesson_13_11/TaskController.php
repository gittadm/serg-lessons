<?php

namespace lesson_13_11;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->only('status', 'description');

//        if (session()->has('filter.status')) {
//            session(['filter' => 123]);
//        }

        $tasks = Task::query();

        $tasks->with('client', 'manager');

        if (!empty($request->status)) {
            $tasks->where('status', $request->status);
        }

        if (!empty($request->description)) {
            $tasks->where('description', 'like', '%' . $request->description . '%');
        }

        $tasks = $tasks->orderBy('id', 'desc')
            ->limit(10)->get();

        $statuses = Task::getStatuses();

        return view('admin.tasks_demo.index',
            compact('tasks', 'filter', 'statuses'));
    }
}
