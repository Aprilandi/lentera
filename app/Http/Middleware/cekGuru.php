<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cekGuru
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
        $id = Auth::user()->id_role;
        $role = Roles::find($id);
        if ($role->role_name == "guru") {
            return $next($request);
        } else {
            return redirect('/dashboard');
        }
    }
}
