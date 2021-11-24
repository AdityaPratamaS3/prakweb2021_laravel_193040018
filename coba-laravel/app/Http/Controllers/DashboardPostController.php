<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Service\SlugService;

class DasboardPostController extends Controllers
{
    @return\Illuminate\Http\Response

    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    @return\Illuminate\Http\Response
    public function create()
    {
        return view('dashboard.posts.create',[
            'categories' => Category::all()
        ]);
    }

    @param\Illuminate\Http\Request $request
    @return\Illuminate\Http\Response

    public function store(Request $request)
    {
        return $request;
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

    public function checkSlug(Request $request)
    {
        $slug = SlugService::checkSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }



}