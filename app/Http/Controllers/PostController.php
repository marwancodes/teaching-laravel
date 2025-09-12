<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index () {

        $data = Post::all();

        return view('posts.index', ['posts' => $data]);
    }

    function create () {

        $post = Post::create([
            'title' => 'Tech News',
            'media' => 'Channel 4',
            'content' => 'This is a tech news content.',
            'author' => 'Mike'
        ]);

        return redirect()->route('posts.index');
    }

    function show ($id) {
        $post = Post::findOrFail($id);

        return view('posts.show', ['post' => $post]);
    }

    function edit ($id) {
        $post = Post::findOrFail($id);

        $post->update([
            'title' => 'United Kinkdom News',
            'media' => 'BBC News',
            'content' => 'This is a United Kingdom news content.',
            'author' => 'David'
        ]);
        return redirect()->route('posts.index');
    }

    function delete ($id) {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index');
    }

    function reset () {
        Post::truncate();

        return redirect()->route('posts.index');
    }
}
