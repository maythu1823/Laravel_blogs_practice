<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;
class CheckPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
          $user = $request->user();

        
        if (!$user) {
            return redirect('/login')->with('error', 'Please login first');
        }

        
       if (!Hash::check('12345678', $user->password)) {
            abort(403, 'You do not have permission to view');
        }
        return $next($request);
    }
}
