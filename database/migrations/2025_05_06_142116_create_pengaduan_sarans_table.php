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
        Schema::create('pangaduan_sarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->string('judul_pengaduan');
            $table->enum('kategori', ['pelayanan', 'fasilitas_umum', 'kshtn_kbrshn', 'katib',
            'sosial', 'pelanggaran_hukum', 'lainnya']);
            $table->text('deskripsi');
            $table->date('tgl_pengaduan');
            $table->enum('status', ['diajukan', 'ditinjau', 'ditanggapi', 'selesai']);
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
        Schema::dropIfExists('pangaduan_sarans');
    }
};
