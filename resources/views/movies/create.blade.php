@extends('master')

@section('title', 'Add Movie')
@section('blog-title', 'Movie blog')
@section('description','Add new movie.')

@section('body')
    <form action="/create" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="title" placeholder="Title">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="genre" placeholder="Genre">
                @error('genre')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="director" placeholder="Director">
                @error('director')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="storyline" placeholder="Storyline">
                @error('storyline')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <input type="text" class="form-control" name="year" placeholder="Year of filming">
                @error('year')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
        </div>
        @csrf
        <button type="submit" class="btn btn-secondary">Add Movie</button>
    </form>

@endsection
