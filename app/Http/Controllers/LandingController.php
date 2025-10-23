<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleStatus;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        $paginationCount = 3;

        if (empty($request->page)) {
            $page = 1;
        } else {
            $page = (int)$request->page;
            if ($page < 1) {
                $page = 1;
            }
        }

//        $faker = Factory::create();
//        Article::create([
//            'title' => $faker->sentence,
//            'status' => Article::STATUS_DRAFT,
//            'description' => $faker->text,
//        ]);

        $articles = Article::where('status', ArticleStatus::PUBLISHED)
            ->orderBy('published_at', 'desc')
            ->offset($paginationCount * ($page - 1))->limit($paginationCount)->get();

        $articlesCount = Article::where('status', ArticleStatus::PUBLISHED)->count();
        $isPaginationNext = $paginationCount * $page < $articlesCount;
        $paginationNextPage = $page + 1;

        return view('landing.index', compact('articles', 'isPaginationNext', 'paginationNextPage'));
    }

    public function about()
    {
        return view('landing.about');
    }
}
