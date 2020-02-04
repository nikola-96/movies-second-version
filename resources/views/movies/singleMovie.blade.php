@extends('master')

@section('title', 'Single Movie')
@section('blog-title', 'Movie blog')
@section('description','This is a single page movie blog')

    
@section('body')
<h2 class="blog-post-title">{{$movie->title}}</h2>
<p class="blog-post-meta">{{$movie->storyline}}<a href="#">{{$movie->genre}}</a></p>
<p class="blog-post-meta">Director: {{$movie->director}}</p>
<p class="blog-post-meta">Year of making: {{$movie->year}}</p>




@endsection