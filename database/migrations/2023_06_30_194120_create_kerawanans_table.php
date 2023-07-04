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
            $table->longText('koordinat_lokasi');
            $table->string('foto_lokasi');
            $table->longText('informasi_bisnis');
            $table->longText('atensi_komoditas');
            $table->longText('riwayat_penindakan');
            $table->longText('riwayat_pelanggaran');
            $table->longText('tingkat_pelanggaran');
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
