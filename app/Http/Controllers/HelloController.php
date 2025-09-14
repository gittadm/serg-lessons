<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class HelloController extends Controller
{
    public function show()
    {
        $a = [1, 2, 5, 6, 2];

        $randomValue = Arr::random($a);

        $str = Str::of('abc')->toString();

        //info($a);
        //dd($a);
        //dump($a);

        $date = date('d.m.Y');
        $count = 10;
        $weight = 60;

        $products = [
            [
                'name' => '<b>test1</b>',
                'price' => 500,
            ],
            [
                'name' => 'test2',
                'price' => 100
            ]
        ];

        //$x = 1
        //"rrrrvdf{$x}"

//        return view('folder.hello',
//            ['date' => $date, 'count' => $count, 'weight' => $weight]);

        return view('folder.hello',
            compact('date', 'count', 'weight', 'products', 'randomValue'));
    }

    public function task1()
    {
        $a = [1, 2];

        return 1;
    }
}
