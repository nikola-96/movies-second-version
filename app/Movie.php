<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded =['id'];

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public static function getMovieById($id){
        return self::find($id);
    }
    public static function getMovieByGenre($genre){
        return self::where('genre', $genre)->get();
    }
}
