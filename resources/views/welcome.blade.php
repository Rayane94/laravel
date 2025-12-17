@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h2>Bienvenue sur le site de {{ $name }}</h2>
    <p>Voici les derniers articles :</p>

    @foreach ($articles as $article)
        @if ($loop->last)
            @break
        @endif

        <x-article
            :title="$article['title']"
            :description="$article['description']"
        />
    @endforeach
@endsection
