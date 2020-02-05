<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Requests\MovieRequest;

class MovieController extends Controller
{
    public function index(){
    $lastFive = $this->latestMovies;
    $movies = \App\Movie::all();

    return view('movies.movies', compact(['movies', 'lastFive']));
    }
 
    public function show($id){
        $movie = \App\Movie::getMovieById($id);
        return view('movies.singleMovie', compact(['movie']));
    }
    public function create(){
        return view('movies.create');
    }
public function store(MovieRequest $request){
    $movie = \App\Movie::create($request->all());
    return redirect()->action('MovieController@index');
}
public function storeCheck($id){

    $box = \App\Movie::find($id);
    $box->watched = request('watched');
    $box->save();
    return redirect()->action('MovieController@index');
}
}
