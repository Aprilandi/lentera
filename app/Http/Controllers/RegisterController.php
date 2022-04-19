<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.register.index', [
            'title' => 'Halaman Registrasi'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users|min:3',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8'
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);
        return redirect('/login')->with('success', 'New admin has been added!');
    }
}
