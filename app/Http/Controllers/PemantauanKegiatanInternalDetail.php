<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KegiatanInternalDetail;

class PemantauanKegiatanInternalDetail extends Controller
{
    public function setHadir(Request $request, string $id){

        $item = KegiatanInternalDetail::findOrFail($id);
        $item->update([
            'is_kehadiran' => true,
        ]);

        return redirect()->route('pemantauan-kegiatan-internal.show', $request->kegiatan_internal_id);
    }

    public function updateDetail(Request $request, string $id){

        $data = $request->all();
        // convert to boolean
        $data['is_pelanggaran'] = $data['is_pelanggaran'] == 'true' ? true : false;
        $data['is_penghargaan'] = $data['is_penghargaan'] == 'true' ? true : false;

        $item = KegiatanInternalDetail::findOrFail($id);
        $item->update($data);

        return redirect()->back()->with('success', 'Data berhasil diubah');
    }
}
