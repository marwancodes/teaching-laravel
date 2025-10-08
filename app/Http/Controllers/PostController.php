<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use HasFactory;

    // Endpoints
    function index () {

        $data = Post::all();

        return view('posts.index', ['posts' => $data]);
    }

    function create () {

        // $post = Post::create([
        //     'title' => 'USA makes history',
        //     'media' => 'CNN',
        //     'content' => 'This is politic news content.',
        //     'author' => 'Adil'
        // ]);

        Post::factory(100)->create();

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




// index, show, edit, update, delete