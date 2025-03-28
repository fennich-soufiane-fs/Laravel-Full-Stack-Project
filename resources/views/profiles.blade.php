@extends('components.master')

@section('main')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Bio</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($profiles as $profile)
            <tr>
                <td>{{ $profile['id'] }}</td>
                <td><img src="https://placehold.co/50x50" alt="img"></td>
                <td>{{ $profile['name'] }}</td>
                <td>{{ $profile['email'] }}</td>
                <td>{{ $profile['bio'] }}</td>
                <td><a href="{{ route('profile.show', $profile['id']) }}">details</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $profiles->links() }}

@endsection
@section('title')
    Profiles
@endsection
