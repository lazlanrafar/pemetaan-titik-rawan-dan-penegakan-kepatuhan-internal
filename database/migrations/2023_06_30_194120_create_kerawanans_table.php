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
        Schema::create('kerawanans', function (Blueprint $table) {
            $table->id();
            $table->json('kategori');
            $table->string('nama_lokasi');
            $table->string('koordinat_lokasi');
            $table->string('foto_lokasi');
            $table->string('informasi_bisnis');
            $table->string('atensi_komoditas');
            $table->string('riwayat_penindakan');
            $table->string('riwayat_pelanggaran');
            $table->string('tingkat_pelanggaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kerawanans');
    }
};
