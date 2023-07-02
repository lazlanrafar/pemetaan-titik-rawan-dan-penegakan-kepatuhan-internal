<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelaksanaanTugas;
use App\Models\Pegawai;

class PengawasanPelaksanaanTugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_pegawai = Pegawai::all();
        $list_jenis_waskat = [
            'Pengawasan Kepatuhan Tugas Rutin (PKTR)',
            'Pemeriksaan Mendadak (SIDAK)',
            'Pendampingan Pelaksanaan Tugas',
            'One day With KI (ODWKI)'
        ];

        $items = PelaksanaanTugas::orderBy('created_at', 'desc')->get();
        foreach ($items as $item) {
            $item->nama_pelaksana = json_decode($item->nama_pelaksana);
            $item->jenis_waskat = json_decode($item->jenis_waskat);
            $item->tanggal_periode = date('Y-m', strtotime($item->tanggal_periode));
        }

        return view('pages.pengawasan-pelaksanaan-tugas.index',[
            "items" => $items,
            "list_pegawai" => $list_pegawai,
            "list_jenis_waskat" => $list_jenis_waskat
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['nama_pelaksana'] = json_encode($data['nama_pelaksana']);
        $data['jenis_waskat'] = json_encode($data['jenis_waskat']);
        $data['tanggal_periode'] = date('Y-m-d', strtotime($data['tanggal_periode']));

        unset($data['foto_pelanggar']);
        if ($request->file('foto_pelanggar')) {
            $data['foto_pelanggar'] = $request->file('foto_pelanggar')->store(
                'assets/pengawasan-pelaksanaan-tugas',
                'public'
            );
        }

        unset($data['dokumantasi_pelanggaran']);
        if ($request->file('dokumantasi_pelanggaran')) {
            $data['dokumantasi_pelanggaran'] = $request->file('dokumantasi_pelanggaran')->store(
                'assets/pengawasan-pelaksanaan-tugas',
                'public'
            );
        }

        unset($data['dokumentasi_1']);
        if ($request->file('dokumentasi_1')) {
            $data['dokumentasi_1'] = $request->file('dokumentasi_1')->store(
                'assets/pengawasan-pelaksanaan-tugas',
                'public'
            );
        }

        unset($data['dokumentasi_2']);
        if ($request->file('dokumentasi_2')) {
            $data['dokumentasi_2'] = $request->file('dokumentasi_2')->store(
                'assets/pengawasan-pelaksanaan-tugas',
                'public'
            );
        }

        unset($data['dokumentasi_3']);
        if ($request->file('dokumentasi_3')) {
            $data['dokumentasi_3'] = $request->file('dokumentasi_3')->store(
                'assets/pengawasan-pelaksanaan-tugas',
                'public'
            );
        }

        unset($data['dokumentasi_4']);
        if ($request->file('dokumentasi_4')) {
            $data['dokumentasi_4'] = $request->file('dokumentasi_4')->store(
                'assets/pengawasan-pelaksanaan-tugas',
                'public'
            );
        }

        unset($data['dokumentasi_5']);
        if ($request->file('dokumentasi_5')) {
            $data['dokumentasi_5'] = $request->file('dokumentasi_5')->store(
                'assets/pengawasan-pelaksanaan-tugas',
                'public'
            );
        }

        PelaksanaanTugas::create($data);

        return redirect()->route('pengawasan-pelaksanaan-tugas.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $data['nama_pelaksana'] = json_encode($data['nama_pelaksana']);
        $data['jenis_waskat'] = json_encode($data['jenis_waskat']);
        $data['tanggal_periode'] = date('Y-m-d', strtotime($data['tanggal_periode']));

        unset($data['foto_pelanggar']);
        if ($request->file('foto_pelanggar')) {
            $data['foto_pelanggar'] = $request->file('foto_pelanggar')->store(
                'assets/pengawasan-pelaksanaan-tugas',
                'public'
            );
        }

        unset($data['dokumantasi_pelanggaran']);
        if ($request->file('dokumantasi_pelanggaran')) {
            $data['dokumantasi_pelanggaran'] = $request->file('dokumantasi_pelanggaran')->store(
                'assets/pengawasan-pelaksanaan-tugas',
                'public'
            );
        }

        unset($data['dokumentasi_1']);
        if ($request->file('dokumentasi_1')) {
            $data['dokumentasi_1'] = $request->file('dokumentasi_1')->store(
                'assets/pengawasan-pelaksanaan-tugas',
                'public'
            );
        }

        unset($data['dokumentasi_2']);
        if ($request->file('dokumentasi_2')) {
            $data['dokumentasi_2'] = $request->file('dokumentasi_2')->store(
                'assets/pengawasan-pelaksanaan-tugas',
                'public'
            );
        }

        unset($data['dokumentasi_3']);
        if ($request->file('dokumentasi_3')) {
            $data['dokumentasi_3'] = $request->file('dokumentasi_3')->store(
                'assets/pengawasan-pelaksanaan-tugas',
                'public'
            );
        }

        unset($data['dokumentasi_4']);
        if ($request->file('dokumentasi_4')) {
            $data['dokumentasi_4'] = $request->file('dokumentasi_4')->store(
                'assets/pengawasan-pelaksanaan-tugas',
                'public'
            );
        }

        unset($data['dokumentasi_5']);
        if ($request->file('dokumentasi_5')) {
            $data['dokumentasi_5'] = $request->file('dokumentasi_5')->store(
                'assets/pengawasan-pelaksanaan-tugas',
                'public'
            );
        }

        $item = PelaksanaanTugas::findOrFail($id);
        $item->update($data);

        return redirect()->route('pengawasan-pelaksanaan-tugas.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
