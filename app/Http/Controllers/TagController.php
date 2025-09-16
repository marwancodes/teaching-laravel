<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;


class TagController extends Controller
{
    function index () {

        $data = Tag::all();

        return view('tags.index', ['tags' => $data]);
    }

    function create () {

        $tag = Tag::create([
            'title' => 'Frontend'
        ]);

        return redirect()->route('tags.index');
    }

    function show ($id) {
        $tag = Tag::findOrFail($id);

        return view('tags.show', ['tag' => $tag]);
    }

    function delete ($id) {
        $post = Tag::findOrFail($id);
        $post->delete();

        return redirect()->route('tags.index');
    }

    function testManyToMany() {
        // $post2 = Post::find(2);
        // $post3 = Post::find(3);

        // $post2->tags()->attach([6, 7]); // attach tags with ids 1 and 2 to post with id 3
        // $post3->tags()->attach(ids: [5]); // attach tags with ids

        // return response()->json([
        //     'post3' => $post2->tags,
        //     'post9'=> $post3->tags
        // ]);

        $tag = Tag::find(8);

        $tag->posts()->attach([9]); // this id from 

        return response()->json([
            'tags' => $tag->title,
            'posts' => $tag->posts
        ]);
    }

}
