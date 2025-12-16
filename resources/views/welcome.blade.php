@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h2>Bienvenue sur la page d’accueil</h2>

    <x-article
        title="L’IA soigne mieux"
        description="L’intelligence artificielle aide les médecins à diagnostiquer plus vite."
    />

    <x-article
        title="Villes vertes"
        description="Les métropoles deviennent plus écologiques et durables."
    />

    <x-article
        title="Télétravail"
        description="Plus de liberté, mais aussi plus de solitude."
    />
@endsection
