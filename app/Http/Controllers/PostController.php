<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    
     public function show($title)
    {   $post = Post::where('title', $title)->firstOrFail();
        return view('posts.show', compact('post'));
    }
}
