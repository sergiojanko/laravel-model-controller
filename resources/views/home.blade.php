@extends('layout.main')

@section('content')
    @forelse ($movies as $movie)
        <ul>
            <li>{{$movie->title}}</li>
            <li>{{$movie->original_title}}</li>
            <li>{{$movie->nationality}}</li>
            <li>{{$movie->date}}</li>
            <li>{{$movie->vote}}</li>
        </ul>
    @empty
        <h2>Non ci sono film</h2>
    @endforelse
@endsection