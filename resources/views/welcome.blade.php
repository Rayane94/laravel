@extends('layouts.app')

@php use Illuminate\Support\Str; @endphp

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
            :description="Str::limit($article['description'], 30, '...')"
        />
    @endforeach
@endsection
