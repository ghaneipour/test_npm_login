<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\support\facades\mail;

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

        Mail::TO('ghaneipour@gmail.com')
        ->send(new \App\Mail\testMail('pedram','ghaneipour'));
        //
        
        dd($item );
         
        if ($request->user == 'pedram') {
            return redirect('home');
        }
        return $next($request);
    }
}
     
 
 