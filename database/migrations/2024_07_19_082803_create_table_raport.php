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
        Schema::create('raport', function (Blueprint $table) {
            $table->id();
            $table->string('id_raport'  );
            $table->string('id_siswa'  );
            $table->string('nama'  );
            $table->string('semester'  );
            $table->string('tahun_ajaran'  );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('raport');
    }
};
