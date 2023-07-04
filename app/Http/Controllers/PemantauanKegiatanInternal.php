<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KegiatanInternal;
use App\Models\KegiatanInternalDetail;
use App\Models\Pegawai;

class PemantauanKegiatanInternal extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = KegiatanInternal::orderBy('created_at', 'desc')->get();

        // count total pegawai
        foreach ($items as $item) {
            $item->total_pegawai = KegiatanInternalDetail::where('id_kegiatan_internal', $item->id)->count();
        }

        $list_jenis = ['Senam', 'PKP', 'Apel', 'Edukasi KI', 'Bintal', 'Kegiatan Lainnya'];
        $list_pegawai = Pegawai::orderBy('name', 'asc')->get();

        return view('pages.pemantauan-kegiatan-internal.index', [
            "items" => $items,
            "list_jenis" => $list_jenis,
            "list_pegawai" => $list_pegawai,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $kegiatan = KegiatanInternal::create($data);

        for ($i = 0; $i < count($data['list_pegawai']); $i++) {
            KegiatanInternalDetail::create([
                'id_kegiatan_internal' => $kegiatan->id,
                'id_pegawai' => $data['list_pegawai'][$i],
            ]);
        }

        return redirect()->route('pemantauan-kegiatan-internal.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = KegiatanInternal::findOrFail($id);
        $list_pegawai = KegiatanInternalDetail::where('id_kegiatan_internal', $item->id)->get();

        return view('pages.pemantauan-kegiatan-internal.detail', [
            "item" => $item,
            "list_pegawai" => $list_pegawai,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $kegiatan = KegiatanInternal::findOrFail($id);
        $kegiatan->update($data);

        return redirect()->route('pemantauan-kegiatan-internal.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kegiatan = KegiatanInternal::findOrFail($id);
        $kegiatan->delete();

        $detail = KegiatanInternalDetail::where('id_kegiatan_internal', $id)->get();
        foreach ($detail as $item) {
            $item->delete();
        }

        return redirect()->route('pemantauan-kegiatan-internal.index')->with('success', 'Data berhasil dihapus');
    }
}
