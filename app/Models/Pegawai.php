<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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
        'id_pengarah',
        'arahan',
        'id_tindaklanjut',
        'tindaklanjut',
    ];

    function pengarah(){
        return $this->belongsTo(User::class, 'id_pengarah');
   }

   function penindaklanjut(){
       return $this->belongsTo(User::class, 'id_tindaklanjut');
   }
}
