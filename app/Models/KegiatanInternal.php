<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class KegiatanInternal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_petugas',
        'nama_kegiatan',
        'jenis_kegiatan',
        'tanggal_kegiatan',
        'id_pengarah',
        'arahan',
    ];

    function petugas(){
         return $this->belongsTo(User::class, 'id_petugas');
    }

    function pengarah(){
         return $this->belongsTo(User::class, 'id_pengarah');
    }
}
