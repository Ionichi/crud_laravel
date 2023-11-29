<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        if(Auth()->check()) {
            return redirect()->intended("/dashboard");
        }
        return view("login");
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        else {
            return redirect()->back()->withInput($request->input())
                ->withErrors("Gagal Login!");
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
