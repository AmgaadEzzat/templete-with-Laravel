<?php

namespace App\Http\Middleware;

use Closure;

class CheckEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(request()->has('writer_name')){
            if(request('writer_name')=='ahmed'){
                return redirect('error');
            }
        }
        return $next($request);
    }
}
