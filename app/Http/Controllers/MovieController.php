<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
    $movies = \App\Movie::all();
    
    return view('movies.movies', compact(['movies']));
    }
}
