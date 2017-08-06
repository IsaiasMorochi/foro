<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class CreatePostController extends Controller
{
    //
    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {

        $post = new Post($request->all());  //creamos una nueva instancia

        auth()->user()->posts()->save($post);   //se lo instaciamos al usuario conectado

        return $post->title;
    }
}
