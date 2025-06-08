<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function showRegistrationForm()
    {
        return view('signup'); // ini akan menampilkan signup.blade.php
    }

    public function signup(Request $request)
    {
        $request->validate([
            'nama'           => 'required|string|max:255',
            'email'          => 'required|string|email|max:255|unique:users',
            'username'       => 'required|string|max:50|unique:users',
            'password'       => 'required|string|min:6',
            'alamat'         => 'required|string',
            'jenis_kelamin'  => 'required|in:laki-laki,perempuan',
            'tanggal_lahir'  => 'required|date',
            'no_hp'          => 'required|string|max:20',
            'role'           => 'required|in:warga,staf_kelurahan',
        ]);

        User::create([
            'nama'           => $request->nama,
            'email'          => $request->email,
            'username'       => $request->username,
            'password'       => Hash::make($request->password),
            'alamat'         => $request->alamat,
            'jenis_kelamin'  => $request->jenis_kelamin,
            'tanggal_lahir'  => $request->tanggal_lahir,
            'no_hp'          => $request->no_hp,
            'role'           => $request->role,
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }
}
