<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KegiatanInternal;
use App\Models\Pegawai;

class KegiatanInternalDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_kegiatan_internal',
        'id_pegawai',
        'is_kehadiran',
        'is_pelanggaran',
        'pelanggaran',
        'is_penghargaan',
        'penghargaan',
    ];

    function kegiatan_internal(){
         return $this->belongsTo(KegiatanInternal::class, 'id_kegiatan_internal');
    }

    function pegawai(){
         return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
