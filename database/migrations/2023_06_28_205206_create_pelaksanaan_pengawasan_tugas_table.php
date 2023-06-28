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
        Schema::create('pelaksanaan_pengawasan_tugas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penginput');
            $table->string('nama_pelaksana');
            $table->string('tanggal');
            $table->string('jenis_waskat');
            $table->string('tempat');
            $table->date('tanggal_periode');
            $table->string('lokasi_1')->nullable();
            $table->string('lokasi_2')->nullable();
            $table->string('lokasi_3')->nullable();
            $table->string('lokasi_4')->nullable();
            $table->string('hasil');
            $table->string('kesimpulan');
            $table->string('nama_pelanggar');
            $table->string('foto_pelanggar');
            $table->string('bidang_pelanggar');
            $table->string('pelanggaran');
            $table->string('dokumantasi_pelanggaran');
            $table->string('informasi_tambahan');
            $table->string('dokumentasi_1')->nullable();
            $table->string('dokumentasi_2')->nullable();
            $table->string('dokumentasi_3')->nullable();
            $table->string('dokumentasi_4')->nullable();
            $table->string('dokumentasi_5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelaksanaan_pengawasan_tugas');
    }
};
