<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'nip',
        'pangkat',
        'golongan',
        'jabatan',
        'unit_eselon_3',
        'is_pelanggaran',
        'pelanggaran',
        'is_penghargaan',
        'penghargaan',
        'id_pengarah',
        'arahan',
        'id_tindaklanjut',
        'tindaklanjut',
    ];
}
