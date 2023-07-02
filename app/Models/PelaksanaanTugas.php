<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class PelaksanaanTugas extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_petugas',
        'nama_pelaksana',
        'tanggal',
        'jenis_waskat',
        'tempat',
        'tanggal_periode',
        'lokasi_pelaksanaan_1',
        'lokasi_pelaksanaan_2',
        'lokasi_pelaksanaan_3',
        'lokasi_pelaksanaan_4',
        'hasil_pelaksanaan',
        'kesimpulan',
        'nama_pelanggar',
        'foto_pelanggar',
        'bidang_pelanggar',
        'pelanggaran',
        'dokumantasi_pelanggaran',
        'informasi_tambahan',
        'dokumentasi_1',
        'dokumentasi_2',
        'dokumentasi_3',
        'dokumentasi_4',
        'dokumentasi_5',
    ];

   function petugas(){
       return $this->belongsTo(User::class, 'id_petugas');
   }
}
