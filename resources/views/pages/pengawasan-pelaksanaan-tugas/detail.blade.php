<!-- Modal -->
<div class="modal fade" id="modalDetail{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="modalDetailLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetailLabel">
                    Detail Pengawasan Pelaksanaan Tugas
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
                <div>
                    <p class="mb-0 fw-medium">Petugas UKI yang Melaksanakan Penginputan</p>
                    <p>{{ $item->petugas->name }}</p>
                </div>
                <div>
                    <p class="mb-0 fw-medium">Nama-Nama Petugas UKI yang Melaksanakan Kegiatan Pemantauan</p>
                    <p>{{ $item->nama_pelaksana }}</p>
                </div>
                <div>
                    <p class="mb-0 fw-medium">Tanggal Pemantauan</p>
                    <p>{{ $item->tanggal }}</p>
                </div>
                <div>
                    <p class="mb-0 fw-medium">Jenis Pelaksanaan Kegiatan Pengawasan Melekat (WASKAT)</p>
                    <ul>
                        @foreach ($item->jenis_waskat as $jenis)
                            <li>{{ $jenis }}</li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <p class="mb-0 fw-medium">Tempat Pelaksanaan Kegiatan</p>
                    <p>{{ $item->tempat }}</p>
                </div>
                <div>
                    <p class="mb-0 fw-medium">Bulan dan Tahun Periode</p>
                    <p>{{ $item->tanggal_periode }}</p>
                </div>
                <div>
                    <p class="mb-0 fw-medium">Lokasi Pelaksanaan Kegiatan - I</p>
                    <p>{{ $item->lokasi_pelaksanaan_1 }}</p>

                </div>
                <div>
                    <p class="mb-0 fw-medium">Lokasi Pelaksanaan Kegiatan - II</p>
                    <p>{{ $item->lokasi_pelaksanaan_2 }}</p>

                </div>
                <div>
                    <p class="mb-0 fw-medium">Lokasi Pelaksanaan Kegiatan - III</p>
                    <p>{{ $item->lokasi_pelaksanaan_3 }}</p>

                </div>
                <div>
                    <p class="mb-0 fw-medium">Lokasi Pelaksanaan Kegiatan - IV</p>
                    <p>{{ $item->lokasi_pelaksanaan_4 }}</p>
                </div>
                <div>
                    <p class="mb-0 fw-medium">Hasil Pelaksanaan Kegiatan</p>
                    <p>{{ $item->hasil_pelaksanaan }}</p>
                </div>
                <div>
                    <p class="mb-0 fw-medium">Kesimpulan Pelaksanaan Kegiatan</p>
                    <p>{{ $item->kesimpulan }}</p>
                </div>
                <div>
                    <p class="mb-0 fw-medium">Nama Pegawai yang Melanggar</p>
                    <p>{{ $item->nama_pelanggar }}</p>
                </div>
                <div>
                    <p class="mb-0 fw-medium">Foto Pegawai yang Melanggar</p>
                    @if ($item->foto_pelanggar == null)
                        <p>Tidak ada foto</p>
                    @else
                        <img src="{{ Storage::url($item->foto_pelanggar) }}" alt="" width="200" />
                    @endif
                </div>
                <div>
                    <p class="mb-0 fw-medium">Bidang Pegawai yang Melanggar</p>
                    <p>{{ $item->bidang_pelanggar }}</p>
                </div>
                <div>
                    <p class="mb-0 fw-medium">Pelanggaran yang dilakukan</p>
                    <p>{{ $item->pelanggaran }}</p>
                </div>
                <div>
                    <p class="mb-0 fw-medium">Dokumentasi Pelanggaran</p>
                    @if ($item->dokumantasi_pelanggaran == null)
                        <p>Tidak ada foto</p>
                    @else
                        <img src="{{ Storage::url($item->dokumantasi_pelanggaran) }}" alt="" width="200" />
                    @endif
                </div>
                <div>
                    <p class="mb-0 fw-medium">Info Tambahan</p>
                    <p>{{ $item->informasi_tambahan }}</p>
                </div>
                <hr />
                <div class="row">
                    <div class="mb-5 col-md-6">
                        <p class="mb-0 fw-medium">Dokumentasi Pelaksanaan - 1</p>
                        @if ($item->dokumentasi_1 == null)
                            <p>Tidak ada foto</p>
                        @else
                            <img src="{{ Storage::url($item->dokumentasi_1) }}" alt="" width="200" />
                        @endif
                    </div>
                    <div class="mb-5 col-md-6">
                        <p class="mb-0 fw-medium">Dokumentasi Pelaksanaan - 2</p>
                        @if ($item->dokumentasi_2 == null)
                            <p>Tidak ada foto</p>
                        @else
                            <img src="{{ Storage::url($item->dokumentasi_2) }}" alt="" width="200" />
                        @endif
                    </div>
                    <div class="mb-5 col-md-6">
                        <p class="mb-0 fw-medium">Dokumentasi Pelaksanaan - 3</p>
                        @if ($item->dokumentasi_3 == null)
                            <p>Tidak ada foto</p>
                        @else
                            <img src="{{ Storage::url($item->dokumentasi_3) }}" alt="" width="200" />
                        @endif
                    </div>
                    <div class="mb-5 col-md-6">
                        <p class="mb-0 fw-medium">Dokumentasi Pelaksanaan - 4</p>
                        @if ($item->dokumentasi_4 == null)
                            <p>Tidak ada foto</p>
                        @else
                            <img src="{{ Storage::url($item->dokumentasi_4) }}" alt="" width="200" />
                        @endif
                    </div>
                    <div class="mb-5 col-md-6">
                        <p class="mb-0 fw-medium">Dokumentasi Pelaksanaan - 5</p>
                        @if ($item->dokumentasi_5 == null)
                            <p>Tidak ada foto</p>
                        @else
                            <img src="{{ Storage::url($item->dokumentasi_5) }}" alt="" width="200" />
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
