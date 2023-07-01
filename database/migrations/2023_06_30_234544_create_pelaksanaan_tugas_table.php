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
        Schema::create('pelaksanaan_tugas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_petugas');
            $table->json('nama_pelaksana');
            $table->date('tanggal');
            $table->json('jenis_waskat');
            $table->string('tempat')->nullable();
            $table->date('tanggal_periode');
            $table->string('lokasi_pelaksanaan_1')->nullable();
            $table->string('lokasi_pelaksanaan_2')->nullable();
            $table->string('lokasi_pelaksanaan_3')->nullable();
            $table->string('lokasi_pelaksanaan_4')->nullable();
            $table->string('hasil_pelaksanaan');
            $table->string('kesimpulan')->nullable();
            $table->string('nama_pelanggar')->nullable();
            $table->string('foto_pelanggar')->nullable();
            $table->string('bidang_pelanggar')->nullable();
            $table->string('pelanggaran')->nullable();
            $table->string('dokumantasi_pelanggaran')->nullable();
            $table->string('informasi_tambahan')->nullable();
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
        Schema::dropIfExists('pelaksanaan_tugas');
    }
};
