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
            $table->longText('nama_pelaksana');
            $table->date('tanggal');
            $table->json('jenis_waskat');
            $table->string('tempat')->nullable();
            $table->date('tanggal_periode');
            $table->string('lokasi_pelaksanaan_1')->nullable();
            $table->string('lokasi_pelaksanaan_2')->nullable();
            $table->string('lokasi_pelaksanaan_3')->nullable();
            $table->string('lokasi_pelaksanaan_4')->nullable();
            $table->longText('hasil_pelaksanaan');
            $table->longText('kesimpulan')->nullable();
            $table->string('nama_pelanggar')->nullable();
            $table->string('foto_pelanggar')->nullable();
            $table->longText('bidang_pelanggar')->nullable();
            $table->longText('pelanggaran')->nullable();
            $table->string('dokumantasi_pelanggaran')->nullable();
            $table->longText('informasi_tambahan')->nullable();
            $table->string('dokumentasi_1')->nullable();
            $table->string('dokumentasi_2')->nullable();
            $table->string('dokumentasi_3')->nullable();
            $table->string('dokumentasi_4')->nullable();
            $table->string('dokumentasi_5')->nullable();
            $table->integer('id_pengarah')->nullable();
            $table->longText('arahan')->nullable();
            $table->integer('id_tindaklanjut')->nullable();
            $table->longText('tindaklanjut')->nullable();
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
