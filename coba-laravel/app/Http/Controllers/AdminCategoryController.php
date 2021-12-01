<?php

namespace App\Http\Controllers;

use App\Models\Category
use Illuminate\Http\Request;


class AdminCategoryController extends Controller
{
    @return\illuminate\Http\Response

    public function index()
    {
        if(auth()->guest || auth()->username !== 'Adityapratamas') {
            abort(403);
        }

        $this->authorize('admin');
        return view('dashboard.categories.index', [
            'categories' => Category::all()
        ]);
    }  

    @return\illuminate\Http\Response

    public function create()
    {

    }

    @param \illuminate\Http\Request $request
    @return \illuminate\Http\Response

    public function store (Request $request)
    {

    }

    @param \illuminate\Http\category $category
    @return \illuminate\Http\Response

    public function show (category $category)
    {
        
    }

    @param \illuminate\Http\category $category
    @return \illuminate\Http\Response

    public function edit (category $category)
    {
        
    }

    @param \illuminate\Http\Request $request
    @param \illuminate\Http\category $category
    @return \illuminate\Http\Response

    public function update (Request $request, category $category)
    {
        
    }

    @param \illuminate\Http\category $category
    @return \illuminate\Http\Response

    public function destroy (category $category)
    {
        
    }
    

    
}