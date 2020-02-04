@extends('master')

@section('title', 'All Movies')
@section('blog-title', 'Movie blog')
@section('description','Welcome to the movie blog')
    
@section('body')
    
    @foreach ($movies as $movie)
        <h2 class="blog-post-title"><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h2>
            <p class="blog-post-meta">{{$movie->storyline}} {{$movie->genre}}</p>
    @endforeach

@endsection

@section('sidebar')
@include('movies.sidebar')
@endsection