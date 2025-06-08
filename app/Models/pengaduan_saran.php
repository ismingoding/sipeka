<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pengaduan_saran extends Model
{
    use HasFactory;

    protected $table = 'pangaduan_sarans';

    protected $fillable = [
        'id_user',
        'jenis',
        'judul_pengaduan',
        'kategori',
        'deskripsi',
        'tgl_pengaduan',
        'status',
    ];

    /**
     * Relasi ke model User.
     * Satu permohonan pengaduan dimiliki oleh satu user.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
