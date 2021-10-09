<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class pedramMidelware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $token=$request->bearerToken();
$item=\App\Models\User::query()->get()->where('token',$token);
        dd($item);
         
        if ($request->user == 'pedram') {
            return redirect('home');
        }
        return $next($request);
    }
}
     
 
 