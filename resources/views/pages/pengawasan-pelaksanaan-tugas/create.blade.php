<!-- Modal -->
<div class="modal fade" id="formCreate" tabindex="-1" role="dialog" aria-labelledby="formCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('pengawasan-pelaksanaan-tugas.store') }}" method="POST">
                @csrf
                <input type="hidden" name="id_petugas" value="{{ request()->session()->get('user')['id'] }}">
                <div class="modal-header">
                    <h5 class="modal-title" id="formCreateLabel">
                        Create Pengawasan Pelaksanaan Tugas Petugas UKI
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
                                            <option value="{{ $pegawai->id }}">{{ $pegawai->nip }} -
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
                                    placeholder="Enter Tanggal Pemantauan" name="tanggal" required />
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
                                            <option value="{{ $jenis }}">{{ $jenis }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="tempatPelaksanaan">Tempat Pelaksanaan Kegiatan</label>
                                <input type="text" class="form-control" id="tempatPelaksanaan" name="tempat"
                                    required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="tanggalPeriode">Bulan dan Tahun Periode*</label>
                                <input type="month" class="form-control" id="tanggalPeriode" name="tanggal_periode"
                                    required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="lokasiPelaksanaan1">Lokasi Pelaksanaan Kegiatan - I*</label>
                                <input type="text" class="form-control" id="lokasiPelaksanaan1"
                                    name="lokasi_pelaksanaan_1" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="lokasiPelaksanaan2">Lokasi Pelaksanaan Kegiatan - II</label>
                                <input type="text" class="form-control" id="lokasiPelaksanaan2"
                                    name="lokasi_pelaksanaan_2" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="lokasiPelaksanaan3">Lokasi Pelaksanaan Kegiatan - III</label>
                                <input type="text" class="form-control" id="lokasiPelaksanaan3"
                                    name="lokasi_pelaksanaan_3" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="lokasiPelaksanaan4">Lokasi Pelaksanaan Kegiatan - IV</label>
                                <input type="text" class="form-control" id="lokasiPelaksanaan4"
                                    name="lokasi_pelaksanaan_4" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Hasil Pelaksanaan Kegiatan</label>
                                <input type="text" class="form-control" name="hasil_pelaksanaan" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Kesimpulan Pelaksanaan Kegiatan</label>
                                <input type="text" class="form-control" name="kesimpulan" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama Pegawai yang Melanggar</label>
                                <input type="text" class="form-control" name="nama_pelanggar" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Foto Pegawai yang Melanggar</label>
                                <input type="file" class="form-control-file" name="foto_pelanggar" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Bidang Pegawai yang Melanggar</label>
                                <input type="text" class="form-control" name="bidang_pelanggar" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Pelanggaran yang dilakukan</label>
                                <input type="text" class="form-control" name="pelanggaran" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Dokumentasi Pelanggaran</label>
                                <input type="file" class="form-control-file" name="dokumantasi_pelanggaran" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Info Tambahan</label>
                                <input type="text" class="form-control" name="informasi_tambahan" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Dokumentasi Pelaksanaan - 1</label>
                                <input type="file" class="form-control-file" name="dokumentasi_1" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Dokumentasi Pelaksanaan - 2</label>
                                <input type="file" class="form-control-file" name="dokumentasi_2" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Dokumentasi Pelaksanaan - 3</label>
                                <input type="file" class="form-control-file" name="dokumentasi_3" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Dokumentasi Pelaksanaan - 4</label>
                                <input type="file" class="form-control-file" name="dokumentasi_4" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Dokumentasi Pelaksanaan - 5</label>
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
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
