@extends('layouts.app')

@section('content')
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
@endsection
    
   

</body>

</html>