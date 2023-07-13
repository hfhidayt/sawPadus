<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'Daftar | PADUS UTDI'
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'username' => 'required|min:4|max:255',
            'password' => 'required|min:8|max:255',
            'nim' => 'required',
            'jurusan' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        if(User::where('username', '=', $validatedData['username'])->exists()) {
            return back()->with('registerError', 'Gagal mendaftar, username sudah digunakan')->withInput();
        } else {
            User::Create($validatedData);
            return redirect('/')->with('success', 'Berhasil mendaftar');
        }
    }
}