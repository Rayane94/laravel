<?php

namespace App\Http\Controllers;

use App\Models\Article;

class IndexController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id')->get();

        return view('welcome', [
            'name' => 'Rayane',
            'articles' => $articles,
        ]);
    }
}
