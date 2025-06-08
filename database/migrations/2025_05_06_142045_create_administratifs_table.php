<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('administratifs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->enum('jenis_surat', ['sp_kk', 'sp_skgr', 'sktm', 'kematian', 'skck', 
            'imb', 'keramaian', 'sp_nikah', 'sp_pindah', 'sp_akta', 'domisili', 'usaha', 
            'kredit', 'ahli_waris']);
            $table->date('tgl_pengajuan');
            $table->enum('status', ['diajukan', 'diverifikasi', 'diproses', 'selesai', 'ditolak']);
            $table->text('catatan')->nullable();
            $table->string('file_path');
            $table->timestamps();

            //mengatur fk untuk id_user
            $table->foreign('id_user')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administratifs');
    }
};
