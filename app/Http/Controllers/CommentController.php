<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function index () {

        $data = Comment::all();

        return view('comments.index', ['comments' => $data]);
    }

    function create () {

        $comment = Comment::create([
            'author' => 'Wiliam Alderson',
            'body' => 'Great article!',
            'post_id' => 8,
        ]);

        return redirect()->route('comments.index');
    }

}
