<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="formUpdateLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('pendampingan-pemeriksaan-fisik.update', $item->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdateLabel">
                        Update Pendampingan Pemeriksaan Fisik
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama Petugas UKI yang Melaksanakan Penginputan</label>
                                <input type="text" class="form-control" disabled
                                    value="{{ request()->session()->get('user')['name'] }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="lokasiPendampingan">Lokasi Pendampingan*</label>
                                <input type="text" class="form-control" id="lokasiPendampingan" name="lokasi"
                                    value="{{ $item->lokasi }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="tanggalPendampingan">Tanggal Pendampingan</label>
                                <input type="date" class="form-control" id="tanggalPendampingan" name="tanggal"
                                    value="{{ $item->tanggal }}" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="namaPerusahaan">Nama Perusahaan</label>
                                <input type="text" class="form-control" id="namaPerusahaan" name="nama_perusahaan"
                                    value="{{ $item->nama_perusahaan }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="noDokumen">Nomor Dokumen</label>
                                <input type="text" class="form-control" id="noDokumen" name="nomor_dokumen"
                                    value="{{ $item->nomor_dokumen }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="tanggalDokumen">Tanggal Dokumen</label>
                                <input type="date" class="form-control" id="tanggalDokumen" name="tanggal_dokumen"
                                    value="{{ $item->tanggal_dokumen }}" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="jmlhKemasan">Jumlah Kemasan / Kontainer</label>
                                <input type="text" class="form-control" id="jmlhKemasan" name="jumlah_kemasan"
                                    value="{{ $item->jumlah_kemasan }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="namaPemeriksa">Nama Pemeriksa Barang</label>
                                <input type="text" class="form-control" id="namaPemeriksa" name="nama_pemeriksa"
                                    value="{{ $item->nama_pemeriksa }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="terdapatPetugasP2">Terdapat Petugas P2</label>
                                <select class="form-control" id="terdapatPetugasP2" name="terdapat_petugas_p2">
                                    @foreach ($list_boolean as $list)
                                        <option value="{{ $list }}"
                                            @if ($list === $item->terdapat_petugas_p2) selected @endif>{{ $list }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="namaPemeriksaP2">Nama Pemeriksa P2</label>
                                <input type="text" class="form-control" id="namaPemeriksaP2" name="nama_petugas_p2"
                                    value="{{ $item->nama_petugas_p2 }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="namaKuasaPerusahaan">Nama Kuasa Perusahaan</label>
                                <input type="text" class="form-control" id="namaKuasaPerusahaan"
                                    value="{{ $item->nama_kuasa_perusahaan }}" name="nama_kuasa_perusahaan" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="waktuMulai">Waktu Mulai Pemeriksaan</label>
                                <input type="datetime-local" class="form-control" id="waktuMulai"
                                    value="{{ $item->waktu_mulai }}" name="waktu_mulai" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="waktuSelesai">Waktu Selesai Pemeriksaan</label>
                                <input type="datetime-local" class="form-control" id="waktuSelesai"
                                    value="{{ $item->waktu_selesai }}" name="waktu_selesai" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="penyampaianPemberitahuan">Penyampaian Pemberitahuan Kesiapan Barang</label>
                                <select class="form-control" id="penyampaianPemberitahuan"
                                    name="pemberitahuan_kesiapan_barang" required>
                                    @foreach ($list_boolean as $list)
                                        <option value="{{ $list }}"
                                            @if ($list === $item->pemberitahuan_kesiapan_barang) selected @endif>{{ $list }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="kondisiTempat">Kondisi Tempat Pemeriksaan Fisik</label>
                                <select class="form-control" id="kondisiTempat" name="kondisi_tempat" required>
                                    @foreach ($list_kondisi_tempat as $list)
                                        <option value="{{ $list }}"
                                            @if ($list === $item->kondisi_tempat) selected @endif>{{ $list }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="jumlahKemasanDiperiksa">Jumlah Kemasan / Kontainer yang Diperiksa</label>
                                <input type="text" class="form-control" id="jumlahKemasanDiperiksa"
                                    value="{{ $item->jumlah_kemasan_diperiksa }}" name="jumlah_kemasan_diperiksa" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="kondisiSegel">Kondisi Segel pada saat Pemeriksaan Fisik</label>
                                <select class="form-control" id="kondisiSegel" name="kondisi_segel" required>
                                    @foreach ($list_kondisi_segel as $list)
                                        <option value="{{ $list }}"
                                            @if ($list === $item->kondisi_segel) selected @endif>{{ $list }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="jumlahTenagBongkar">Jumlah Tenaga Bongkar Muat</label>
                                <input type="number" class="form-control" id="jumlahTenagBongkar"
                                    value="{{ $item->jumlah_tenaga_bongkar }}" name="jumlah_tenaga_bongkar" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="alatBongkar">Alat Bongkar Muat</label>
                                <select class="form-control" id="alatBongkar" name="alat_bongkar_muat" required>
                                    @foreach ($list_boolean as $list)
                                        <option value="{{ $list }}"
                                            @if ($list === $item->alat_bongkar_muat) selected @endif>{{ $list }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="tingkatPemeriksaanFisik">Tingkat Pemeriksaan Fisik</label>
                                <select class="form-control" id="tingkatPemeriksaanFisik"
                                    name="tingkat_pemeriksaan_fisik" required>
                                    @foreach ($list_tingkat_pemeriksaan_fisik as $list)
                                        <option value="{{ $list }}"
                                            @if ($list === $item->tingkat_pemeriksaan_fisik) selected @endif>{{ $list }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="alasan_pemeriksaan_fisik">Alasan Pemeriksaan Fisik Secara Mendalam</label>
                                <input type="text" class="form-control" id="alasan_pemeriksaan_fisik"
                                    value="{{ $item->alasan_pemeriksaan_fisik }}" name="alasan_pemeriksaan_fisik" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="kondisi_barang">Kondisi Barang</label>
                                <input type="text" class="form-control" id="kondisi_barang"
                                    value="{{ $item->kondisi_barang }}" name="kondisi_barang" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="jenis_barang">Jenis Barang</label>
                                <input type="text" class="form-control" id="jenis_barang" name="jenis_barang"
                                    value="{{ $item->jenis_barang }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="contoh_barang">Contoh Barang yang Diajukan</label>
                                <select class="form-control" id="contoh_barang" name="contoh_barang" required>
                                    @foreach ($list_boolean as $list)
                                        <option value="{{ $list }}"
                                            @if ($list === $item->contoh_barang) selected @endif>{{ $list }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="kelengkapan_dokumen">Kelengkapan Dokumen</label>
                                <select class="form-control" id="kelengkapan_dokumen" name="kelengkapan_dokumen"
                                    required>
                                    @foreach ($list_boolean as $list)
                                        <option value="{{ $list }}"
                                            @if ($list === $item->kelengkapan_dokumen) selected @endif>{{ $list }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="pengajuan_foto">Pengajuan Kelengkapan Foto Pemeriksaan</label>
                                <select class="form-control" id="pengajuan_foto" name="pengajuan_foto" required>
                                    @foreach ($list_boolean as $list)
                                        <option value="{{ $list }}"
                                            @if ($list === $item->pengajuan_foto) selected @endif>{{ $list }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="hasil_pemeriksaan">Hasil Pemeriksaan</label>
                                <input type="text" class="form-control" id="hasil_pemeriksaan"
                                    value="{{ $item->hasil_pemeriksaan }}" name="hasil_pemeriksaan" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="temuan">Temuan</label>
                                <input type="text" class="form-control" id="temuan" name="temuan"
                                    value="{{ $item->temuan }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="tindak_lanjut_temuan">Tindak Lanjut Temuan</label>
                                <input type="text" class="form-control" id="tindak_lanjut_temuan"
                                    value="{{ $item->tindak_lanjut_temuan }}" name="tindak_lanjut_temuan" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="catatan">Catatan Pendampingan</label>
                                <input type="text" class="form-control" id="catatan" name="catatan"
                                    value="{{ $item->catatan }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="bukti_foto_1">Bukti Foto 1</label>
                                <span>- Upload untuk update</span>
                                <input type="file" class="form-control-file" id="bukti_foto_1"
                                    name="bukti_foto_1" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="bukti_foto_2">Bukti Foto 2</label>
                                <span>- Upload untuk update</span>
                                <input type="file" class="form-control-file" id="bukti_foto_2"
                                    name="bukti_foto_2" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="bukti_foto_3">Bukti Foto 3</label>
                                <span>- Upload untuk update</span>
                                <input type="file" class="form-control-file" id="bukti_foto_3"
                                    name="bukti_foto_3" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="bukti_foto_4">Bukti Foto 4</label>
                                <span>- Upload untuk update</span>
                                <input type="file" class="form-control-file" id="bukti_foto_4"
                                    name="bukti_foto_4" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="bukti_foto_5">Bukti Foto 5</label>
                                <span>- Upload untuk update</span>
                                <input type="file" class="form-control-file" id="bukti_foto_5"
                                    name="bukti_foto_5" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="bukti_foto_6">Bukti Foto 6</label>
                                <span>- Upload untuk update</span>
                                <input type="file" class="form-control-file" id="bukti_foto_6"
                                    name="bukti_foto_6" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
