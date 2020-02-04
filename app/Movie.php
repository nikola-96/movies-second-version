<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded =['id'];

    public static function getMovieById($id){
        return self::find($id);
    }
}
