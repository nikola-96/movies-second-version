@extends('master')

@section('title', 'All Movies')
    
@section('body')
    
    @foreach ($movies as $movie)
        <h2 class="blog-post-title">{{$movie->title}}</h2>
            <p class="blog-post-meta">{{$movie->storyline}}<a href="#">{{$movie->genre}}</a></p>
    @endforeach

@endsection