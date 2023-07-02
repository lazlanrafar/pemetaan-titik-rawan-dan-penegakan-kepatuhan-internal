<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="formUpdateLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('pengawasan-pelaksanaan-tugas.update', $item->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdateLabel">
                        Update Pengawasan Pelaksanaan Tugas - {{ $item->name }}
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
                                <label>Nama-Nama Petugas UKI yang Melaksanakan Kegiatan Pemantauan</label>
                                <div class="select2-blue">
                                    <select class="select2" multiple="multiple" data-placeholder="Select a State"
                                        style="width: 100%;" name="nama_pelaksana[]" required>
                                        <option>Pilih Petugas</option>
                                        @foreach ($list_pegawai as $pegawai)
                                            <option value="{{ $pegawai->id }}"
                                                @if (in_array($pegawai->id, $item->nama_pelaksana)) selected @endif>{{ $pegawai->nip }} -
                                                {{ $pegawai->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="tanggal">Tanggal Pemantauan</label>
                                <input type="date" class="form-control" id="tanggal"
                                    placeholder="Enter Tanggal Pemantauan" name="tanggal" required
                                    value="{{ $item->tanggal }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Jenis Pelaksanaan Kegiatan Pengawasan Melekat (WASKAT)</label>
                                <div class="select2-blue">
                                    <select class="select2" multiple="multiple" data-placeholder="Select a State"
                                        style="width: 100%;" name="jenis_waskat[]" required>
                                        <option>Pilih Jenis</option>
                                        @foreach ($list_jenis_waskat as $jenis)
                                            <option value="{{ $jenis }}"
                                                @if (in_array($jenis, $item->jenis_waskat)) selected @endif>{{ $jenis }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="tempatPelaksanaan">Tempat Pelaksanaan Kegiatan</label>
                                <input type="text" class="form-control" id="tempatPelaksanaan" name="tempat"
                                    value="{{ $item->tempat }}" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="tanggalPeriode">Bulan dan Tahun Periode*</label>
                                <input type="month" class="form-control" id="tanggalPeriode" name="tanggal_periode"
                                    value="{{ $item->tanggal_periode }}" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="lokasiPelaksanaan1">Lokasi Pelaksanaan Kegiatan - I*</label>
                                <input type="text" class="form-control" id="lokasiPelaksanaan1"
                                    value="{{ $item->lokasi_pelaksanaan_1 }}" name="lokasi_pelaksanaan_1" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="lokasiPelaksanaan2">Lokasi Pelaksanaan Kegiatan - II</label>
                                <input type="text" class="form-control" id="lokasiPelaksanaan2"
                                    value="{{ $item->lokasi_pelaksanaan_2 }}" name="lokasi_pelaksanaan_2" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="lokasiPelaksanaan3">Lokasi Pelaksanaan Kegiatan - III</label>
                                <input type="text" class="form-control" id="lokasiPelaksanaan3"
                                    value="{{ $item->lokasi_pelaksanaan_3 }}" name="lokasi_pelaksanaan_3" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="lokasiPelaksanaan4">Lokasi Pelaksanaan Kegiatan - IV</label>
                                <input type="text" class="form-control" id="lokasiPelaksanaan4"
                                    value="{{ $item->lokasi_pelaksanaan_4 }}" name="lokasi_pelaksanaan_4" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Hasil Pelaksanaan Kegiatan</label>
                                <input type="text" class="form-control" name="hasil_pelaksanaan"
                                    value="{{ $item->hasil_pelaksanaan }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Kesimpulan Pelaksanaan Kegiatan</label>
                                <input type="text" class="form-control" name="kesimpulan"
                                    value="{{ $item->kesimpulan }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama Pegawai yang Melanggar</label>
                                <input type="text" class="form-control" name="nama_pelanggar"
                                    value="{{ $item->nama_pelanggar }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Foto Pegawai yang Melanggar</label>
                                <span>- upload untuk update</span>
                                <input type="file" class="form-control-file" name="foto_pelanggar" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Bidang Pegawai yang Melanggar</label>
                                <input type="text" class="form-control" name="bidang_pelanggar"
                                    value="{{ $item->bidang_pelanggar }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Pelanggaran yang dilakukan</label>
                                <input type="text" class="form-control" name="pelanggaran"
                                    value="{{ $item->pelanggaran }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Dokumentasi Pelanggaran</label>
                                <span>- upload untuk update</span>
                                <input type="file" class="form-control-file" name="dokumantasi_pelanggaran" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Info Tambahan</label>
                                <input type="text" class="form-control" name="informasi_tambahan"
                                    value="{{ $item->informasi_tambahan }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Dokumentasi Pelaksanaan - 1</label>
                                <span>- upload untuk update</span>
                                <input type="file" class="form-control-file" name="dokumentasi_1" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Dokumentasi Pelaksanaan - 2</label>
                                <span>- upload untuk update</span>
                                <input type="file" class="form-control-file" name="dokumentasi_2" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Dokumentasi Pelaksanaan - 3</label>
                                <span>- upload untuk update</span>
                                <input type="file" class="form-control-file" name="dokumentasi_3" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Dokumentasi Pelaksanaan - 4</label>
                                <span>- upload untuk update</span>
                                <input type="file" class="form-control-file" name="dokumentasi_4" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Dokumentasi Pelaksanaan - 5</label>
                                <span>- upload untuk update</span>
                                <input type="file" class="form-control-file" name="dokumentasi_5" />
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
