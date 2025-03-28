@extends('components.master')


@section('main')
<form action="{{ route('posts.store') }}" method="POST" class="container mt-4">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Name :</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required class="form-control">
    </div>

    <div class="mb-3">
        <label for="title" class="form-label">Email :</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required class="form-control">
    </div>

    <div class="mb-3">
        <label for="title" class="form-label">Password :</label>
        <input type="password" id="password" name="password" value="{{ old('password') }}" required class="form-control">
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Description :</label>
        <textarea id="bio" name="bio" required class="form-control">{{ old('content') }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Ajouter le post</button>
</form>
@endsection
