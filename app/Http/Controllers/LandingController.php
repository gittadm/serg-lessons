<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleStatus;

class LandingController extends Controller
{
    public function index()
    {
//        $faker = Factory::create();
//        Article::create([
//            'title' => $faker->sentence,
//            'status' => Article::STATUS_DRAFT,
//            'description' => $faker->text,
//        ]);

        $articles = Article::where('status', ArticleStatus::PUBLISHED)
            ->orderBy('published_at', 'desc')->limit(3)->get();

        return view('landing.index', compact('articles'));
    }

    public function about()
    {
        return view('landing.about');
    }
}
