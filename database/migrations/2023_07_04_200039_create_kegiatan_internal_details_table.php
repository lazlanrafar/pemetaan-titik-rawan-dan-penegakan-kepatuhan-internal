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
        Schema::create('kegiatan_internal_details', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kegiatan_internal');
            $table->integer('id_pegawai');
            $table->boolean('is_kehadiran')->default(false);
            $table->integer('id_tindaklanjut')->nullable();
            $table->longText('tindaklanjut')->nullable();
            $table->boolean('is_pelanggaran')->default(false);
            $table->longText('pelanggaran')->nullable();
            $table->boolean('is_penghargaan')->default(false);
            $table->longText('penghargaan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan_internal_details');
    }
};
