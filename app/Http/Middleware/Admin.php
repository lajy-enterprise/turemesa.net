<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\Donation;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
         if ($request->user()->hasRole('user')) {
            if ($request->session()->has('redirect_to')) {
                return redirect(session('redirect_to'));
            }else{
                return redirect('/');
            }
        } else if ($request->user()->hasRole('admin')) {
                return $next($request);
        }else {
            if ($request->session()->has('redirect_to')) {
                return redirect(session('redirect_to'));
            }else{
                // return abort(403);
                return redirect('/');
            }
        }
    }
}
