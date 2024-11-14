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
        Schema::create('students', function (Blueprint $table) {
            $table->id('nis');
            $table->string('nama_siswa', 40);
            $table->enum('jekel', ['LK', 'PR']);
            $table->foreignId('grade_id') -> constrained('grades');
            $table->enum('status', ['Aktif', 'Lulus', 'Pindah']);
            $table->year('th_masuk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
