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
        Schema::create('verifikasi_permohonans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_adm');
            $table->unsignedBigInteger('id_user');
            $table->date('tgl_verif');
            $table->enum('status', ['diajukan', 'diverifikasi', 'ditangguhkan', 'ditolak', 'disetujui']);
            $table->text('catatan');
            $table->timestamps();

            //mengatur fk untuk id_user
            $table->foreign('id_user')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            //mengatur fk untuk id_user
            $table->foreign('id_adm')
            ->references('id')
            ->on('administratifs')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verifikasi_permohonans');
    }
};
