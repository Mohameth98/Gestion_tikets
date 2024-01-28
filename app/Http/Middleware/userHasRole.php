<?php

namespace App\Http\Middleware;
  
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\M_utilisateur;
use Illuminate\Support\Facades\Auth;

class userHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,  $role): Response
    {
        // if ($request->user() && $request->user()->role === $role){
        //     return $next($request);
        // }  
        // abort(404);
        if (!auth()->check()) {
            return redirect('login');
        }
    
        $userRole = auth()->user()->role;
    
        if ($userRole !== $role) {
            abort(403, 'Accès interdit');
        }
    
        return $next($request);
    }
}



?>