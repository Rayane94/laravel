@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h2>Bienvenue sur le site de {{ $name }}</h2>
    <p>Voici les derniers articles :</p>

    <p>
        <a href="{{ route('articles.create') }}">Créer les 3 articles</a>
    </p>

    @forelse ($articles as $article)
        @if ($loop->last)
            @break
        @endif

        <a href="{{ route('article.details', ['id' => $article->id]) }}">
            <x-article :title="$article->title" :description="$article->description" />
        </a>

        <p>
            <a href="{{ route('articles.edit', ['id' => $article->id]) }}">Modifier</a>
            <a href="{{ route('articles.delete', ['id' => $article->id]) }}">Supprimer</a>
        </p>
    @empty
        <p>Aucun article en base. Clique sur “Créer les 3 articles”.</p>
    @endforelse
@endsection
