<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class IsEntreprise
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        $user = Auth::user();;
        if ($user->type != "company"){
            return redirect('home');
        }
        return $next($request);
    }
}
