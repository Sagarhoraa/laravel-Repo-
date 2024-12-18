<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role): Response
    {
       if(!Auth::check()){
        return redirect()->route('login');
       }
       $authUserRole = Auth::user()->role;
       switch($role){
        case "admin":
            if($authUserRole==1){
                return $next($request);
            }
            break;
        case "parent":
            if($authUserRole==0){
                return $next($request);
            }    
       }
       switch($authUserRole){
        case 0:
            return redirect()->route('parentdashboard');
       
        case 1:
            return redirect()->route('admindashboard');

    }
    return redirect()->route('login');

}
}
