<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJenisToPengaduanSaransTable extends Migration
{
    public function up()
    {
        Schema::table('pangaduan_sarans', function (Blueprint $table) {
            $table->enum('jenis', ['pengaduan', 'saran'])->after('id_user')->default('pengaduan');
        });
    }

    public function down()
    {
        Schema::table('pangaduan_sarans', function (Blueprint $table) {
            $table->dropColumn('jenis');
        });
    }
};