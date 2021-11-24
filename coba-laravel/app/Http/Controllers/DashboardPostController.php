<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DasboardPostController extends Controllers
{
    @return\Illuminate\Http\Response

    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    @param\Illuminate\Http\Request $request
    @return\Illuminate\Http\Response

    public function store(Request $request)
    {
        //
    }

    @param\App\Models\Post $post
    @return\Illuminate\Http\Response

    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    @param\App\Models\Post $post
    @return\Illuminate\Http\Response

    public function edit(Post $post)
    {
        //
    }

    @param\Illuminate\Http\Request $request
    @param \App|Models\Post $post
    @return\Illuminate\Http\Response

    public function update(Request $request, Post $post)
    {
        //
    }

    @param\App\Models\Post $post
    @return\Illuminate\Http\Response

    public function destroy(Post $post)
    {
        //
    }



}