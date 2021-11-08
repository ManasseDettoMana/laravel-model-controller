@extends('layout.main')

@section('content')
    <div class="container">
        @foreach($movies as $movie)
            <div class="card">
                <h2>{{$movie->title}}</h2>
                <h3>{{$movie->original_title}}</h3>
                <h4>vote: {{$movie->vote}}</h4>
            </div>
        @endforeach
    </div>
@endsection