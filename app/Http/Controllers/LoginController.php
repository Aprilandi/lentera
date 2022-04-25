<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login.index', [
            'title' => 'Halaman Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $crds = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($crds)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        // if (Auth::attempt([$this->username() => $request->email, 'password' => $request->password])) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/dashboard');
        // }

        return back()->with('loginError', 'Login failed!');
    }

    public function username(){
        $login = request()->input('username');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'nutpk';
        request()->merge([$field => $login]);
        return $field;
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
