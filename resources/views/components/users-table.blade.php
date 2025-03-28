@props(['users'])
<div>
    @foreach ($users as $user)
    <li>ID: {{ $user['id'] }} - Nom: {{ $user['nom'] }} - Métier: {{ $user['metier'] }}</li>
    @endforeach
</div>