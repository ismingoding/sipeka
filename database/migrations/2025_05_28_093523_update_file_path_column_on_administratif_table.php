<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('administratifs', function (Blueprint $table) {
            $table->text('file_path')->nullable()->change(); // atau json() kalau mau json
        });
    }
    
    public function down()
    {
        Schema::table('administratifs', function (Blueprint $table) {
            $table->string('file_path', 255)->nullable()->change(); // rollback ke varchar(255)
        });
    }
    

};
