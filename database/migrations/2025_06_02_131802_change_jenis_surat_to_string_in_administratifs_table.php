<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('administratifs', function (Blueprint $table) {
            // Ubah kolom jenis_surat jadi string, pakai ->change()
            $table->string('jenis_surat')->change();
        });
    }

    public function down(): void
    {
        Schema::table('administratifs', function (Blueprint $table) {
            // Kalau rollback, ubah kembali jadi enum (sesuaikan enumnya)
            $table->enum('jenis_surat', ['sp_kk', 'sp_skgr', 'sktm', 'kematian', 'skck', 'imb', 'keramaian', 'sp_nikah', 'sp_pindah', 'sp_akta', 'domisili', 'usaha', 'kredit', 'ahli_waris'])->change();
        });
    }
};
