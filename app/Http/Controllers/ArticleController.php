<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('pages.article-details', [
            'article' => $article
        ]);
    }

    public function creer()
    {
        Article::updateOrCreate(
            ['title' => "L’IA soigne mieux"],
            ['description' => "L’intelligence artificielle aide les médecins à diagnostiquer plus vite."]
        );

        Article::updateOrCreate(
            ['title' => "Villes vertes"],
            ['description' => "Les métropoles deviennent plus écologiques et durables."]
        );

        Article::updateOrCreate(
            ['title' => "Télétravail"],
            ['description' => "Plus de liberté, mais aussi plus de solitude."]
        );

        return redirect()->route('home');
    }

    public function modifier($id)
    {
        $article = Article::findOrFail($id);

        $article->update([
            'title' => $article->title . ' modifié'
        ]);

        return redirect()->route('article.details', ['id' => $article->id]);
    }

    public function supprimer($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('home');
    }
}
