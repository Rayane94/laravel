@extends('layouts.app')

@section('title', 'Article ' . $id)

@section('content')
    <h2>Article portant l’identifiant {{ $id }}</h2>
@endsection
