<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Str;

class CarbonController extends Controller
{
    public function task1(string $id)
    {
        return 'Ваша статья: ' . $id;
    }

    private function parseInputDates(string $inputDate): array
    {
        $inputDates = [];

        if (Str::contains($inputDate, '-')) {
            $parts = explode('-', $inputDate);
            $startDate = Carbon::parse($parts[0]);
            $endDate = Carbon::parse($parts[1]);
            while ($startDate->lte($endDate)) {
                $inputDates[] = $startDate->copy();
                $startDate->addDay();
            }
        } else {
            $inputDates[] = Carbon::parse($inputDate);
        }

        return $inputDates;
    }

    public function task2()
    {
        /*
        Дан массив дат бронирования номера в отеле.
        Элемент массива или одна дата, или период – две даты через дефис.
        Пример: $dates = [‘12.09.2017’, ‘14.09.2017-02.10.2017’];
        Выяснить можно ли добавить в массив данную дату или
        период для нового бронирования.
        Например, для указанного выше примера период
        ‘01.10.2017-05.10.2017’ добавлять нельзя,
        так как первые два дня уже забронированы.
        */

        $dates = ['12.09.2017', '14.09.2017-02.10.2017'];
        $inputDate = '01.10.2017-05.10.2017';

        $inputDates = $this->parseInputDates($inputDate);
    }

    public function task3()
    {


    }
}
