<!-- Modal -->
<div class="modal fade" id="modalDetail{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="modalDetailLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetailLabel">
                    Detail Pendampingan Pemeriksaan Fisik
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
                        </div>
                    </div>
                @endif
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Nama Petugas UKI yang Melaksanakan Penginputan</p>
                    <p>{{ $item->petugas->name }}</p>
                </div>
                <hr>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Lokasi Pendampingan</p>
                    <p>{{ $item->lokasi }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Tanggal Pendampingan</p>
                    <p>{{ $item->tanggal }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Nama Perusahaan</p>
                    <p>{{ $item->nama_perusahaan }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Nomor Dokumen</p>
                    <p>{{ $item->nomor_dokumen }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Tanggal Dokumen</p>
                    <p>{{ $item->tanggal_dokumen }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Jumlah Kemasan / Kontainer</p>
                    <p>{{ $item->jumlah_kemasan }}</p>
                </div>
                <hr>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Nama Pemeriksa Barang</p>
                    <p>{{ $item->nama_pemeriksa }}</p>
                </div>
                <hr>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Terdapat Petugas P2</p>
                    <p>{{ $item->terdapat_petugas_p2 }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Nama Pemeriksa P2</p>
                    <p>{{ $item->nama_petugas_p2 }}</p>
                </div>
                <hr>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Nama Kuasa Perusahaan</p>
                    <p>{{ $item->nama_kuasa_perusahaan }}</p>
                </div>
                <hr>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Waktu Mulai Pemeriksaan</p>
                    <p>{{ $item->waktu_mulai }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Waktu Selesai Pemeriksaan</p>
                    <p>{{ $item->waktu_selesai }}</p>
                </div>
                <hr>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Penyampaian Pemberitahuan Kesiapan Barang</p>
                    <p>{{ $item->pemberitahuan_kesiapan_barang }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Kondisi Tempat Pemeriksaan Fisik</p>
                    <p>{{ $item->kondisi_tempat }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Jumlah Kemasan / Kontainer yang Diperiksa</p>
                    <p>{{ $item->jumlah_kemasan_diperiksa }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Kondisi Segel pada saat Pemeriksaan Fisik</p>
                    <p>{{ $item->kondisi_segel }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Jumlah Tenaga Bongkar Muat</p>
                    <p>{{ $item->jumlah_tenaga_bongkar }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Alat Bongkar Muat</p>
                    <p>{{ $item->alat_bongkar_muat }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Tingkat Pemeriksaan Fisik</p>
                    <p>{{ $item->tingkat_pemeriksaan_fisik }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Alasan Pemeriksaan Fisik Secara Mendalam</p>
                    <p>{{ $item->alasan_pemeriksaan_fisik }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Kondisi Barang</p>
                    <p>{{ $item->kondisi_barang }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Jenis Barang</p>
                    <p>{{ $item->jenis_barang }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Contoh Barang yang Diajukan</p>
                    <p>{{ $item->contoh_barang }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Kelengkapan Dokumen</p>
                    <p>{{ $item->kelengkapan_dokumen }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Pengajuan Kelengkapan Foto Pemeriksaan</p>
                    <p>{{ $item->pengajuan_foto }}</p>
                </div>
                <hr>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Hasil Pemeriksaan</p>
                    <p>{{ $item->hasil_pemeriksaan }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Temuan</p>
                    <p>{{ $item->temuan }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Tindak Lanjut Temuan</p>
                    <p>{{ $item->tindak_lanjut_temuan }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Catatan Pendampingan</p>
                    <p>{{ $item->catatan }}</p>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <p class="mb-0 fw-medium">Bukti Foto 1</p>
                            @if ($item->bukti_foto_1)
                                <img src="{{ Storage::url($item->bukti_foto_1) }}" alt="Foto" height="200px" />
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p class="mb-0 fw-medium">Bukti Foto 2</p>
                            @if ($item->bukti_foto_2)
                                <img src="{{ Storage::url($item->bukti_foto_2) }}" alt="Foto" height="200px" />
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p class="mb-0 fw-medium">Bukti Foto 3</p>
                            @if ($item->bukti_foto_3)
                                <img src="{{ Storage::url($item->bukti_foto_3) }}" alt="Foto" height="200px" />
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p class="mb-0 fw-medium">Bukti Foto 4</p>
                            @if ($item->bukti_foto_4)
                                <img src="{{ Storage::url($item->bukti_foto_4) }}" alt="Foto" height="200px" />
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p class="mb-0 fw-medium">Bukti Foto 5</p>
                            @if ($item->bukti_foto_5)
                                <img src="{{ Storage::url($item->bukti_foto_5) }}" alt="Foto" height="200px" />
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p class="mb-0 fw-medium">Bukti Foto 6</p>
                            @if ($item->bukti_foto_6)
                                <img src="{{ Storage::url($item->bukti_foto_6) }}" alt="Foto" height="200px" />
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
