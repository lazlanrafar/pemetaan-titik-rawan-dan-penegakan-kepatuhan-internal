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
        'jenis_kegiatan',
        'lokasi_kegiatan',
    ];

    function petugas(){
         return $this->belongsTo(User::class, 'id_petugas');
    }
}
