@extends('components.master')

@section('main')
    <x-alert type="danger"><strong>yes</strong></x-alert>
    <h1>Home</h1>
    <ul>
        @foreach ($users as $user)
            <li>ID: {{ $user['id'] }} - Nom: {{ $user['nom'] }} - Métier: {{ $user['metier'] }}</li>
        @endforeach
    </ul>
    <x-users-table :users="$users"/>
@endsection

@section('title')
    Accueil
@endsection
