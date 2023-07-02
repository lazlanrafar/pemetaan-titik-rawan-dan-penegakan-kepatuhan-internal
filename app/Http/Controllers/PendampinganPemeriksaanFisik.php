<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemeriksaanFisik;
use App\Models\Pegawai;

class PendampinganPemeriksaanFisik extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = PemeriksaanFisik::orderBy('created_at', 'desc')->get();

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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        unset($data['bukti_foto_1']);
        if ($request->file('bukti_foto_1')) {
            $data['bukti_foto_1'] = $request->file('bukti_foto_1')->store(
                'assets/pendampingan-pemeriksaan-fisik',
                'public'
            );
        }
        unset($data['bukti_foto_2']);
        if ($request->file('bukti_foto_2')) {
            $data['bukti_foto_2'] = $request->file('bukti_foto_2')->store(
                'assets/pendampingan-pemeriksaan-fisik',
                'public'
            );
        }
        unset($data['bukti_foto_3']);
        if ($request->file('bukti_foto_3')) {
            $data['bukti_foto_3'] = $request->file('bukti_foto_3')->store(
                'assets/pendampingan-pemeriksaan-fisik',
                'public'
            );
        }
        unset($data['bukti_foto_4']);
        if ($request->file('bukti_foto_4')) {
            $data['bukti_foto_4'] = $request->file('bukti_foto_4')->store(
                'assets/pendampingan-pemeriksaan-fisik',
                'public'
            );
        }
        unset($data['bukti_foto_5']);
        if ($request->file('bukti_foto_5')) {
            $data['bukti_foto_5'] = $request->file('bukti_foto_5')->store(
                'assets/pendampingan-pemeriksaan-fisik',
                'public'
            );
        }
        unset($data['bukti_foto_6']);
        if ($request->file('bukti_foto_6')) {
            $data['bukti_foto_6'] = $request->file('bukti_foto_6')->store(
                'assets/pendampingan-pemeriksaan-fisik',
                'public'
            );
        }

        PemeriksaanFisik::create($data);

        return redirect()->route('pendampingan-pemeriksaan-fisik.index');
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
