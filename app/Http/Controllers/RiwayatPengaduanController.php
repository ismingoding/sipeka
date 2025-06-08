<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengaduan_saran;

class RiwayatPengaduanController extends Controller
{
    public function show()
    {
        $user = auth()->user(); // ambil user yang sedang login

        // Ambil semua data administratif berdasarkan user login
        $riwayat = pengaduan_saran::where('id_user', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('riwayatpengaduan', compact('user', 'riwayat'));
    }
}
