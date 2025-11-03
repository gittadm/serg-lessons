<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class HelloController extends Controller
{
    public function only()
    {
        return 'secret';
    }

    public function show()
    {
        // Session::forget('views');

        // session()->forget('views');

        if (session()->exists('views')) {
            // session(['views' => session('views') + 1]);
            session()->increment('views', 10);
        } else {
            session(['views' => 1]);
        }

        session(['users' => []]);
        //$users = session('users');

        session()->push('users', ['name' => 'Petr', 'year' => 2000, 'products' => [1, 3]]);
        session()->push('users', ['name' => 'Ivan', 'year' => 2001, 'products' => [1, 3]]);

        session()->push('users.1.products', 10);

        //session(['users' => $users]);
        dd(session('users'));

        //dd(session('views'));

        $views = session('views');

        // 30/10/25

        //$articles = Article::whereNotNull('user_id')->orderBy('id')->get();

        // 'user.cars' - вложенные связи
        $articles = Article::with('user')
            ->whereNotNull('user_id')->orderBy('id')->get();

        return view('relations', compact('articles', 'views'));

        // ------------------------------------------

        $user = User::findOrFail(1);
        // $articles = Article::where('user_id', $user->id)->get();

        $articles = $user->articles; // без ()

        $article = Article::findOrFail(1);
        $userName = $article->user->name;

        dd($userName);
        //

        //$articles = Article::all();

        dump($user);
        dd($articles);

        return 1;

        /// ------------------------------------
        ///
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
