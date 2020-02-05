@extends('master')

@section('title', 'All Movies')
@section('blog-title', 'Movie blog')
@section('description','Welcome to the movie blog')
    
@section('body')
    
    @foreach ($movies as $movie)
        @if(!$movie->watched)
        <h2 class="blog-post-title"><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h2>
            <p class="blog-post-meta">{{$movie->storyline}} {{$movie->genre}}</p>
            <form action="/puting/{{$movie->id}}" method="post">
                @csrf

                <div class="" ><input type="checkbox" name="watched" value="1" id="watched"> If you watch this movie check on.</div>
                <button type="submit">Watched</button>
            </form>
            @endif
            
    @endforeach



@endsection

@section('sidebar')
@include('movies.sidebar')
@endsection

