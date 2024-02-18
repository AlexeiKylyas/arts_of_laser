<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        var_dump($credentials);
        var_dump(Hash::make('admin'));
        if (Auth::guard('admins')->attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }
        var_dump(Auth::guard('admins')->attempt($credentials));
        exit();
        return back()->withErrors(['email' => 'Invalid email or password.'])->withInput($request->only('email'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
