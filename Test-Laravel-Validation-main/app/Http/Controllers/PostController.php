<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            ['title' => 'bail|required|unique:posts|max:255']);



        // Saving the post
        Post::create(['title' => $request->title]);

        return 'Success';
    }
}