@extends('master')

@section('title', 'Add Movie')
@section('blog-title', 'Movie blog')
@section('description','Add new movie.')

@section('body')
    <form action="/create" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="genre" placeholder="Genre">
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="director" placeholder="Director">
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="storyline" placeholder="Storyline">
            </div>
            <div class="form-group col-md-3">
                <input type="text" class="form-control" name="year" placeholder="Year of filming">
            </div>
        </div>
        @csrf
        <button type="submit" class="btn btn-secondary">Add Movie</button>
    </form>

@endsection
