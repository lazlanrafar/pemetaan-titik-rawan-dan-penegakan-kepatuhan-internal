<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kerawanan;

class DataKerawananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_kategori = [
            "CUKAI - MMEA IMPORT",
            "CUKAI - HASIL TEMBAKAU",
            "CUKAI - MMEA LOCAL",
            "EKSPOR - BARANG KIRIMAN/POS",
            "FASILITAS - FTZ",
            "IMPORT - BARANG KIRIMAN/POS",
            "IMPORT - BARANG PENUMPANG",
            "IMPORT - UMUM",
            "EXPORT - UMUM",
        ];

        $items = Kerawanan::all();

        $kategori_active = 'All';
        if (request()->has('kategori')) {
            $kategori_active = request()->get('kategori');

            $items = Kerawanan::where('kategori', 'LIKE', "%$kategori_active%")->get();
        }

        foreach ($items as $item) {
            $item->kategori = json_decode($item->kategori);
        }

        return view('pages.data-kerawanan.index', [
            "list_kategori" => $list_kategori,
            "kategori_active" => $kategori_active,
            "items" => $items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto_lokasi' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        // kategori to json
        $data['kategori'] = json_encode($data['kategori']);

        $data['foto_lokasi'] = $request->file('foto_lokasi')->store(
            'assets/data-kerawanan',
            'public'
        );

        Kerawanan::create($data);
        return redirect()->route('data-kerawanan.index')->with('success', 'Data berhasil ditambahkan');
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

        if ($request['kategori']){
            $data['kategori'] = json_encode($data['kategori']);
        }

        $item = Kerawanan::findOrFail($id);

        unset($data['foto_lokasi']);
        if ($request->file('foto_lokasi')) {
            $data['foto_lokasi'] = $request->file('foto_lokasi')->store(
                'assets/data-kerawanan',
                'public'
            );
        }

        $item->update($data);

        return redirect()->route('data-kerawanan.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Kerawanan::findOrFail($id);
        $item->delete();

        return redirect()->route('data-kerawanan.index')->with('success', 'Data berhasil dihapus');
    }
}
