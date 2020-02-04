<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function show($genre){
        $lastFive = $this->latestMovies;
        $movies = \App\Movie::getMovieByGenre($genre);
        return view('movies.movies', compact(['movies', 'lastFive']));
    }
}
