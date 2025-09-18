<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function carbon()
    {
        // Вывести все прошедшие понедельники текущего года

        $start = '10:00';
        $end = '18:00';
        $relax_period = 10;
        $lesson_period = 45;

        $startDate = Carbon::parse($start);
        $endDate = Carbon::parse($end);

        while ($startDate->copy()->addMinutes($lesson_period)->lte($endDate)) {
            echo $startDate->format('H:i') . ' - ' .
                $startDate->addMinutes($lesson_period)->format('H:i') . '<br>';
            $startDate->addMinutes($relax_period);
        }

//        $date = now();
//        $year = $date->year;
//        $count = 1;
//        while ($date->year === $year) {
//            $date->subDays($count);
//            if ($date->isMonday()) {
//                echo $date->toDateString() . ' ' . $date->dayOfWeek . '<br>';
//                $count = 7;
//            }
//        }

        return;

        // ------------------------------------------------
        $now = now();
        $now = Carbon::now();

        $dt = Carbon::createFromFormat('d.m.Y H:i', '15.09.2025 12:20');
        $dt = Carbon::parse('15.09.2025 12:20');

        $dt->addDays(7);
        $dt->addWeek();
        $dt->addSeconds(20);
        $dt->startOfDay();
        $dt->endOfDay();

        $dt2 = $dt->copy()->addDays(7);

        if ($dt2->lessThanOrEqualTo($dt)) {
            //
        }

        if ($dt2->lte($dt)) {
            //
        }

        if ($dt2->diffInSeconds($dt, false)) {

        }

        return $dt->translatedFormat('l');

        //return $dt->locale('en')->translatedFormat('l');
        return $now->dayOfWeek;
        return $dt->toDateTimeString();
        return $dt->month;
        return $dt->year;
        return $dt->format('Y H');
        return $dt;
    }

    public function show()
    {
        return view('form');
    }

    public function store(Request $request)
    {
//        dd($request->input('address', '111'));
//        dd($request->address);
//        dd($request->ip());
//        dd($request->all());

        return redirect()->route('form.show')->with('message', ['x' => 1]);
    }
}
