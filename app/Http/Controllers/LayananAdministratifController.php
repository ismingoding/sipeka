<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\administratif;

class LayananAdministratifController extends Controller
{
    public function show()
    {

            return view('layananadministratif');
    
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_surat' => 'required|string|max:255',
            'catatan' => 'nullable|string',
            'file_path.*' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
        ]);

        // Cek apakah ada pengajuan yang masih diproses dengan jenis yang sama
        $existing = administratif::where('id_user', Auth::id())
            ->where('jenis_surat', $request->jenis_surat)
            ->where('status', 'Diproses')
            ->first();

        if ($existing) {
            return redirect()->back()->with('error', 'Pengajuan dengan jenis surat ini masih dalam proses. Silakan tunggu sampai selesai sebelum mengajukan lagi.');
        }

        $filePaths = [];

        // Simpan semua file jika ada
        if ($request->hasFile('file_path')) {
            foreach ($request->file('file_path') as $file) {
                $path = $file->store('administratif_files', 'public');
                $filePaths[] = $path;
            }
        }

        administratif::create([
            'id_user' => Auth::id(),
            'jenis_surat' => $request->jenis_surat,
            'tgl_pengajuan' => now(),
            'status' => 'Diproses',
            'catatan' => $request->catatan,
            'file_path' => json_encode($filePaths), // disimpan dalam bentuk array (JSON)
        ]);

        return redirect()->back()->with('success', 'Pengajuan surat berhasil dikirim.');
    }


}
