<!-- Modal -->
<div class="modal fade" id="modalDetail{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="modalDetailLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetailLabel">
                    Detail Data Kerawanan
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-poppins text-sm">
                @if ($item->arahan)
                    <div class="card bg-info">
                        <div class="card-body">
                            <p>"{{ $item->arahan }}"</p>
                            <p class="mb-0">
                                Arahan oleh : {{ $item->pengarah->name }}
                            </p>

                            <hr>

                            @if ($item->tindaklanjut)
                                <p>"{{ $item->tindaklanjut }}"</p>
                                <p class="mb-0">
                                    Tindak Lanjut oleh : {{ $item->penindaklanjut->name }}
                                </p>
                            @endif
                        </div>
                    </div>
                @endif

                <div class="mb-4">
                    <p class="mb-0 fw-medium">Nama Lokasi Kegiatan</p>
                    <p>{{ $item->nama_lokasi }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Koordinat Lokasi Kegiatan</p>
                    <p>{{ $item->koordinat_lokasi }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Foto Lokasi Kegiatan</p>
                    <img src="{{ Storage::url($item->foto_lokasi) }}" alt="Foto Lokasi" height="100px" />
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Kategori</p>
                    <ul>
                        @foreach ($item->kategori as $kategori)
                            <li>{{ $kategori }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Informasi Terkait Proses Bisnis</p>
                    <p>{{ $item->informasi_bisnis }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Atensi Komoditas</p>
                    <p>{{ $item->atensi_komoditas }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Riwayat Penindakan oleh Bidang yang Mengawasi/Melayani</p>
                    <p>{{ $item->riwayat_penindakan }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Riwayat Terjadinya Pelanggaran Integritas oleh Pegawai DJBC</p>
                    <p>{{ $item->riwayat_pelanggaran }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Tingkat Pelanggaran Integritas yang Terjadi</p>
                    <p>{{ $item->tingkat_pelanggaran }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
