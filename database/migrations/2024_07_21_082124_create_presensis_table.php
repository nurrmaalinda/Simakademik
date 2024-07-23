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
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->string('id_siswa', 255);
            $table->string('nama', 255);
            $table->string('id_jadwal', 255);
            $table->date('tanggal');
            $table->enum('status', ['Hadir', 'Izin', 'Sakit']); // Kolom jenis kelamin, dapat kosong (nullable)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensis');
    }
};
