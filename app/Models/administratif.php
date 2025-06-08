<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administratif extends Model
{
    use HasFactory;

    protected $table = 'administratifs';

    protected $fillable = [
        'id_user',
        'jenis_surat',
        'tgl_pengajuan',
        'status',
        'catatan',
        'file_path',
    ];

    /**
     * Relasi ke model User.
     * Satu permohonan administratif dimiliki oleh satu user.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
