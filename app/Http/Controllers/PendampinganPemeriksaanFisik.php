<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelaksanaanTugas;
use App\Models\Pegawai;

class PendampinganPemeriksaanFisik extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = PelaksanaanTugas::orderBy('created_at', 'desc')->get();

        $list_boolean = ['Ada', 'Tidak Ada'];
        $list_kondisi_tempat = ['Basah', 'Kering'];
        $list_kondisi_segel = ['Segel Baik', 'Segel Rusak', 'Tanpa Segel'];
        $list_tingkat_pemeriksaan_fisik = ['30%', 'Mendalam'];

        return view('pages.pendampingan-pemeriksaan-fisik.index',[
            "items" => $items,
            "list_boolean" => $list_boolean,
            "list_kondisi_tempat" => $list_kondisi_tempat,
            "list_kondisi_segel" => $list_kondisi_segel,
            "list_tingkat_pemeriksaan_fisik" => $list_tingkat_pemeriksaan_fisik,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
