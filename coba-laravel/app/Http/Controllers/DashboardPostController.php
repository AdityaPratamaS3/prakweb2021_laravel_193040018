<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Service\SlugService;
use illuminate\Support\Str;

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


        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'imgae' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-images');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::create($validateData);

        return redirect('/dashboard/posts')->with('success'.'New post has been added!');
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
        return view('dashboard.posts.edit',[
            'post' => $post,
            'categories' => Category::all()
        ]);

    }

    @param\Illuminate\Http\Request $request
    @param \App|Models\Post $post
    @return\Illuminate\Http\Response

    public function update(Request $request, Post $post)
    {
        $rules =([
            'title' => 'required|max:255',
            'category_id' => 'required',
=            'body' => 'required'
        ]);

        if($request->slug !=$post->slug) {
            $rules['slug'] = 'required|unique:posts'
        }

        $validateData = $request->validate($rules);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::where('id', $post->id)
        ->update($validateData);

        return redirect('/dashboard/posts')->with('success'.'post has been updated!');

    }

    @param\App\Models\Post $post
    @return\Illuminate\Http\Response

    public function destroy(Post $post)
    {
       Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success'.' post has been added!');

    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::checkSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }



}