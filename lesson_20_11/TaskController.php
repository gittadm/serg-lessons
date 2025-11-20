<?php

namespace lesson_20_11;

use App\Events\DoorKnockEvent;
use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        //Event::dispatch(new DoorKnockEvent(999));
        event(new DoorKnockEvent(777));
        //DoorKnockEvent::dispatch(888);
    }
}
