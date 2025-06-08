<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\pengaduan_saran;

class LayananPengaduanController extends Controller
{
    public function show()
    {

            return view('layananpengaduan');
    
    }

    public function store(Request $request)
{
    $request->validate([
        'judul_pengaduan' => 'required|string|max:255',
        'kategori' => 'required|in:pelayanan,fasilitas_umum,kshtn_kbrshn,katib,sosial,pelanggaran_hukum,lainnya',
        'deskripsi' => 'required|string',
        'file_path.*' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
    ]);

    $filePaths = [];

    if ($request->hasFile('file_path')) {
        foreach ($request->file('file_path') as $file) {
            $path = $file->store('pengaduan_files', 'public');
            $filePaths[] = $path;
        }
    }

    pengaduan_saran::create([
        'id_user' => Auth::id(),
        'jenis' => $request->jenis,
        'judul_pengaduan' => $request->judul_pengaduan,
        'kategori' => $request->kategori,
        'deskripsi' => $request->deskripsi,
        'tgl_pengaduan' => now(),
        'status' => 'diajukan', // default status diajukan
        'file_path' => json_encode($filePaths),
    ]);

    return redirect()->back()->with('success', 'Pengaduan berhasil dikirim.');
}


}