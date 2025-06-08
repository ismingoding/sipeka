<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function show()
{
    $user = auth()->user(); // ambil user yang sedang login
    return view('profil', compact('user'));
}

    public function update(Request $request, $id)
{
        User::where('id', $id)
            ->where('id', $id)
                ->update([
            'nama'           => $request->nama,
            'email'          => $request->email,
            'username'       => $request->username,
            'password'       => Hash::make($request->password),
            'alamat'         => $request->alamat,
            'jenis_kelamin'  => $request->jenis_kelamin,
            'tanggal_lahir'  => $request->tanggal_lahir,
            'no_hp'          => $request->no_hp,
                ]);

        return redirect('/profil')->with('success', 'Data Berhasil Di Ubah');
}

}
