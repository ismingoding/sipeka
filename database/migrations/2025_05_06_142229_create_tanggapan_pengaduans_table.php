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
        Schema::create('tanggapan_pengaduans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pengaduan');
            $table->unsignedBigInteger('id_user');
            $table->text('tanggapan');
            $table->date('tgl_tanggapan');
            $table->enum('status', ['diajukan', 'ditinjau', 'ditanggapi', 'selesai']);
            $table->timestamps();

            $table->foreign('id_user')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            //mengatur fk untuk id_user
            $table->foreign('id_pengaduan')
            ->references('id')
            ->on('pangaduan_sarans')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanggapan_pengaduans');
    }
};
