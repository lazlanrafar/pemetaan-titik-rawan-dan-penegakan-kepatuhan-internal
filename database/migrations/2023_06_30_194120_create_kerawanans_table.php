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
            $table->longText('informasi_bisnis')->nullable();
            $table->longText('atensi_komoditas')->nullable();
            $table->longText('riwayat_penindakan')->nullable();
            $table->longText('riwayat_pelanggaran')->nullable();
            $table->longText('tingkat_pelanggaran')->nullable();
            $table->integer('id_pengarah')->nullable();
            $table->longText('arahan')->nullable();
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
