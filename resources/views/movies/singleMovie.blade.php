@extends('master')

@section('title', 'Single Movie')
@section('blog-title', 'Movie blog')
@section('description','This is a single page movie blog')
    
@section('body')
    <h2 class="blog-post-title">{{$movie->title}}</h2>
        <p class="blog-post-meta">{{$movie->storyline}}<a href="/genres/{{$movie->genre}}">{{$movie->genre}}</a></p>
        <p class="blog-post-meta">Director: {{$movie->director}}</p>
        <p class="blog-post-meta">Year of making: {{$movie->year}}</p>
    <div class="container">
        <p><br><strong>Comments:</strong><br></p>
            <ul class="list-unstiled">
                @foreach($movie->comment as $comment)
                    <li>
                    <p>{{ $comment->content }}</p> 
                    <p>{{ $comment->created_at }}</p>
                    </li>
                @endforeach
            </ul>
    </div>
@include('movies.commentForm')

@endsection

