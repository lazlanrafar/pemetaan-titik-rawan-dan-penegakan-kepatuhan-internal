<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerawanan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kategori',
        'nama_lokasi',
        'koordinat_lokasi',
        'foto_lokasi',
        'informasi_bisnis',
        'atensi_komoditas',
        'riwayat_penindakan',
        'riwayat_pelanggaran',
        'tingkat_pelanggaran',
    ];
}
