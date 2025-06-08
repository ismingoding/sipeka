<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administratif;

class RiwayatPermohonanController extends Controller
{
    public function show()
    {
        $user = auth()->user(); // ambil user yang sedang login

        // Ambil semua data administratif berdasarkan user login
        $riwayat = administratif::where('id_user', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('riwayatpermohonan', compact('user', 'riwayat'));
    }
}
