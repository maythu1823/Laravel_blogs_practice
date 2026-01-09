<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Post;

class CheckPostTitle
{
    public function handle(Request $request, Closure $next): Response
    {   
        
        $title = $request->route('title');

      
        $post = Post::where('title', $title)->first();

        if (!$post) {
             return response()->view('errors.post_not_found', [], 404);
        }

        
        if ($post->title !== 'about bagan trip') {
            abort(403, 'Access denied to view about  trip');
        }



        return $next($request);
    }
}
