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
