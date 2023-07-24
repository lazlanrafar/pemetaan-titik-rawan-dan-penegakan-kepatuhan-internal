<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\KegiatanInternalDetail;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Pegawai::orderBy('name', 'asc')->get();

        foreach ($items as $item) {
            $all_kegiatan = KegiatanInternalDetail::where('id_pegawai', $item->id)->get();

            // tambah tahun kegiatan
            foreach ($all_kegiatan as $kegiatan) {
                $kegiatan->tahun = $kegiatan->kegiatan_internal->tanggal_kegiatan;
            }

            $total_kegiatan = count($all_kegiatan);
            $total_kehadiran = count($all_kegiatan->where('is_kehadiran', true));

            $total_pelanggaran = count($all_kegiatan->where('is_pelanggaran', true));
            $total_penghargaan = count($all_kegiatan->where('is_penghargaan', true));

            $presentase_kehadiran = $total_kegiatan == 0 ? 0 : round($total_kehadiran / $total_kegiatan * 100, 2);
            $point_kehadiran = $presentase_kehadiran == 100 ? 80 : round($presentase_kehadiran / 100 * 80, 2);

            $point_pelanggaran = $total_pelanggaran * 20;
            $point_penghargaan = $total_penghargaan * 20;

            $item->total_kegiatan = $total_kegiatan;
            $item->presentase_kehadiran = $presentase_kehadiran;
            $item->total_point = $point_kehadiran - $point_pelanggaran + $point_penghargaan;
            $item->kegiatan = $all_kegiatan;
        }

        return view('pages.pegawai.index', [
            "items" => $items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'unique:pegawais',
            'email' => 'unique:pegawais'
        ]);

        $data = $request->all();
        Pegawai::create($data);

        return redirect()->route('pegawai.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        if($request->has('is_pelanggaran')){
            $data['is_pelanggaran'] = $data['is_pelanggaran'] == 'true' ? true : false;
            $data['is_penghargaan'] = $data['is_penghargaan'] == 'true' ? true : false;
        }

        $item = Pegawai::findOrFail($id);
        $item->update($data);

        return redirect()->route('pegawai.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Pegawai::findOrFail($id);
        $item->delete();

        return redirect()->route('pegawai.index')->with('success', 'Data berhasil dihapus');
    }
}
