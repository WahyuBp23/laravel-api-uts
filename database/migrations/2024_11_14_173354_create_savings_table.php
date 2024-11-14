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
        Schema::create('savings', function (Blueprint $table) {
            $table->id('id_pengguna');
            $table->unsignedBigInteger('nomor_induk_siswa');
            $table->integer('setor');
            $table->integer('tarik');
            $table->date('tgl');
            $table->enum('jenis',['ST','TR']);
            $table->foreignId('id_user')->constrained('users');
            $table->timestamps();

            $table->foreign('nomor_induk_siswa')->references('nis')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('savings');
    }
};
