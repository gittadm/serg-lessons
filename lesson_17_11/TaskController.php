<?php

namespace lesson_17_11;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $a = 1;

        $user = DB::transaction(function () use ($a) {
            User::create(['type' => 'admin', 'name' => 'name', 'password' => '1234', 'login' => $a . 'dd' . mt_rand(100, 1000000)]);
            $user = User::create(['type' => 'admin', 'name' => 'name', 'password' => '1234', 'login' => 'dd' . mt_rand(100, 1000000)]);
            return $user;
        });

        return $user;

        DB::beginTransaction();

        try {
            User::create(['type' => 'admin', 'name' => 'name', 'password' => '1234', 'login' => $a . 'dd' . mt_rand(100, 1000000)]);
            $user = User::create(['type' => 'admin', 'name' => 'name', 'password' => '1234', 'login' => 'dd' . mt_rand(100, 1000000)]);
            DB::commit();

        } catch (\Throwable) {
            DB::rollBack();
        }
    }
}
