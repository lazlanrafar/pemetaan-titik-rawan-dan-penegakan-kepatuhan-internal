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
        Schema::create('kegiatan_internals', function (Blueprint $table) {
            $table->id();
            $table->integer('id_petugas');
            $table->longText('nama_kegiatan');
            $table->longText('jenis_kegiatan');
            $table->longText('lokasi_kegiatan');
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
        Schema::dropIfExists('kegiatan_internals');
    }
};
