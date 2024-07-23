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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 255);
            $table->string('nama', 255);
            $table->date('tanggal_lahir');
            $table->string('alamat', 255);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']); // Kolom jenis kelamin, dapat kosong (nullable)
            $table->string('foto')->nullable(); // Kolom foto, dapat kosong (nullable)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
