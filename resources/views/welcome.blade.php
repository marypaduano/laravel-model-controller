<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
<div class="container">
    <div class="row">

        @forelse ($movies as $movie)
            <div class="col-3">
                <h3>{{ $movie->title }}</h3>
                <p>{{ $movie->original_title }}</p>
                <span>
                 {{ $movie->nationality }}
                </span>
            </div>
        @empty

        @endforelse

    </div>

</div>
    
   

</body>

</html>