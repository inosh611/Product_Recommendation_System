<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

            $data = $request->session()->get('data');
            if($data){
                if($data['position']== 1){
                    return redirect('/viewproduct')->with('data', $data);
                }else{
                     return redirect('/viewproductuser')->with('data', $data);
                }
            }




    }
}
