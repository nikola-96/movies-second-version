<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommmentRequest;

class CommentController extends Controller
{
    public function store(CommmentRequest $request, $id){
        $comment = new \App\Comment();
        $comment->content = $request['content'];
        $comment->movie_id = $id;
        $comment->save();
        return redirect('/movies/' . $id);
    }
}
