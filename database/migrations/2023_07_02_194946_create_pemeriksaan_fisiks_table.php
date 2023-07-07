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
        Schema::create('pemeriksaan_fisiks', function (Blueprint $table) {
            $table->id();
            $table->integer('id_petugas');
            $table->string('lokasi');
            $table->date('tanggal');
            $table->string('nama_perusahaan')->nullable();
            $table->string('nomor_dokumen')->nullable();
            $table->string('tanggal_dokumen')->nullable();
            $table->string('jumlah_kemasan')->nullable();
            $table->string('nama_pemeriksa')->nullable();
            $table->string('terdapat_petugas_p2')->nullable();
            $table->string('nama_petugas_p2')->nullable();
            $table->string('nama_kuasa_perusahaan')->nullable();
            $table->dateTime('waktu_mulai')->nullable();
            $table->dateTime('waktu_selesai')->nullable();
            $table->string('pemberitahuan_kesiapan_barang')->nullable();
            $table->string('kondisi_tempat')->nullable();
            $table->string('jumlah_kemasan_diperiksa')->nullable();
            $table->string('kondisi_segel')->nullable();
            $table->string('jumlah_tenaga_bongkar')->nullable();
            $table->string('alat_bongkar_muat')->nullable();
            $table->string('tingkat_pemeriksaan_fisik')->nullable();
            $table->longText('alasan_pemeriksaan_fisik')->nullable();
            $table->longText('kondisi_barang')->nullable();
            $table->longText('jenis_barang')->nullable();
            $table->longText('contoh_barang')->nullable();
            $table->string('kelengkapan_dokumen')->nullable();
            $table->string('pengajuan_foto')->nullable();
            $table->longText('hasil_pemeriksaan')->nullable();
            $table->longText('temuan')->nullable();
            $table->longText('tindak_lanjut_temuan')->nullable();
            $table->longText('catatan')->nullable();
            $table->string('bukti_foto_1')->nullable();
            $table->string('bukti_foto_2')->nullable();
            $table->string('bukti_foto_3')->nullable();
            $table->string('bukti_foto_4')->nullable();
            $table->string('bukti_foto_5')->nullable();
            $table->string('bukti_foto_6')->nullable();
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
        Schema::dropIfExists('pemeriksaan_fisiks');
    }
};
