<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    @include('partials.nav')

    <main>
        <div class="m-3">
            @yield('main')  {{-- Ici, le contenu de @section('main') sera affiché --}}
        </div>
    </main>

    @include('partials.footer')
</body>
</html>