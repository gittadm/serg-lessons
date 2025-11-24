<?php

namespace lesson_24_11;

use App\Events\DoorKnockEvent;
use App\Http\Controllers\Controller;
use App\Jobs\CreatingCompanyJob;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        dump(1111);

        CreatingCompanyJob::dispatch(999);

        dump(22222);


    }
}
