@extends('components.master')

@section('main')

    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h5>Détails de l'utilisateur</h5>
            </div>
            <div class="card-body">

                <h5 class="card-title">Nom : {{ $profile->name }}</h5>
                <p class="card-text"><strong>ID:</strong> {{ $profile->id }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $profile->email }}</p>
                <p class="card-text"><strong>Bio:</strong> {{ $profile->bio ?? 'Non spécifiée' }}</p>
                <p class="card-text"><strong>Rôle:</strong> {{ $profile->role ?? 'Non défini' }}</p>
            </div>
        </div>
    </div>

@endsection
