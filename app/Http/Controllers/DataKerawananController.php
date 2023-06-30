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

        return view('pages.data-kerawanan.index', [
            "list_kategori" => $list_kategori,
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
