<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class iniTamu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            return redirect('departemen')->with('sucess','Anda Sudah Login Anda Harus Logout Terlebih Dahulu Jika Ingin Ke Halaman Login');
        } 
        return $next($request);
    }
}
