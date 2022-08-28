<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class clientAutentification
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


        if(isset(request()->session()->all()['clientID']))
        {
             if(request()->session()->all()['clientID']=='ebbana')
            {
                // dd(request()->session()->all());
                return redirect('/logIn');

            }
            else
            {
                // dd(request()->session()->all());
                return $next($request);
            }
        }
        else{
            session(['clientID' => 'ebbana']);
            return redirect('/logIn');
        }


    }



}
