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
        Schema::create('pendampingan_pemeriksaan_fisiks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_petugas');
            $table->string('lokasi');
            $table->date('tanggal');
            $table->string('nama_perusahaan')->nullable();
            $table->string('nomor_dokumen')->nullable();
            $table->string('tanggal_dokumen')->nullable();
            $table->string('jumlah_kemasan')->nullable();
            $table->string('nama_pemeriksa')->nullable();
            $table->string('terdapat_petugas_p2')->default(false);
            $table->string('nama_petugas_p2')->nullable();
            $table->string('nama_kuasa_perusahaan')->nullable();
            $table->dateTime('waktu_mulai')->nullable();
            $table->dateTime('waktu_selesai')->nullable();
            $table->string('pemberitahuan_kesiapan_barang')->default(false);
            $table->string('kondisi_tempat')->nullable();
            $table->string('jumlah_kemasan_diperiksa')->nullable();
            $table->string('kondisi_segel')->nullable();
            $table->string('jumlah_tenaga_bongkar')->nullable();
            $table->string('alat_bongkar_muat')->nullable();
            $table->string('tingkat_pemeriksaan_fisik')->nullable();
            $table->string('alasan_pemeriksaan_fisik')->nullable();
            $table->string('kondisi_barang')->nullable();
            $table->string('jenis_barang')->nullable();
            $table->string('contoh_barang')->nullable();
            $table->string('kelengkapan_dokumen')->nullable();
            $table->string('pengajuan_foto')->nullable();
            $table->string('hasil_pemeriksaan')->nullable();
            $table->string('temuan')->nullable();
            $table->string('tindak_lanjut_temuan')->nullable();
            $table->string('catatan')->nullable();
            $table->string('bukti_foto_1')->nullable();
            $table->string('bukti_foto_2')->nullable();
            $table->string('bukti_foto_3')->nullable();
            $table->string('bukti_foto_4')->nullable();
            $table->string('bukti_foto_5')->nullable();
            $table->string('bukti_foto_6')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendampingan_pemeriksaan_fisiks');
    }
};
