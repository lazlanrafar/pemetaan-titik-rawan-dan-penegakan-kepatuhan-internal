<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class PemeriksaanFisik extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_petugas',
        'lokasi',
        'tanggal',
        'nama_perusahaan',
        'nomor_dokumen',
        'tanggal_dokumen',
        'jumlah_kemasan',
        'nama_pemeriksa',
        'terdapat_petugas_p2',
        'nama_petugas_p2',
        'nama_kuasa_perusahaan',
        'waktu_mulai',
        'waktu_selesai',
        'pemberitahuan_kesiapan_barang',
        'kondisi_tempat',
        'jumlah_kemasan_diperiksa',
        'kondisi_segel',
        'jumlah_tenaga_bongkar',
        'alat_bongkar_muat',
        'tingkat_pemeriksaan_fisik',
        'alasan_pemeriksaan_fisik',
        'kondisi_barang',
        'jenis_barang',
        'contoh_barang',
        'kelengkapan_dokumen',
        'pengajuan_foto',
        'hasil_pemeriksaan',
        'temuan',
        'tindak_lanjut_temuan',
        'catatan',
        'bukti_foto_1',
        'bukti_foto_2',
        'bukti_foto_3',
        'bukti_foto_4',
        'bukti_foto_5',
        'bukti_foto_6',
        'id_pengarah',
        'arahan',
        'id_tindaklanjut',
        'tindaklanjut',
    ];

    function petugas(){
        return $this->belongsTo(User::class, 'id_petugas');
    }

    function pengarah(){
          return $this->belongsTo(User::class, 'id_pengarah');
    }
}
