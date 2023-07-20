<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('index', [
            'title' => 'Sign In | PADUS UTDI'
        ]);
    }

    public function authenticate(Request $request) {
        // dd($request);
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            // dd('sukses');
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        
        // dd('tidak sukses');
        return back()->with('loginError', 'Login Gagal!');
    }
    
    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
