<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.pages.login', [
            'title' => 'Login'
        ]);
    }

    public function login_process()
    {
        request()->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        try {
            $credentials = request()->only('email', 'password');
            $remember = request()->has('remember');

            if (Auth::attempt($credentials, $remember)) {
                return redirect()->intended('admin');
            } else {
                return redirect()->route('login')->with('error', 'Invalid email or password');
            }
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('login')->with('error', $th->getMessage());
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login')->with('success', 'Logout successfully');
    }
}
