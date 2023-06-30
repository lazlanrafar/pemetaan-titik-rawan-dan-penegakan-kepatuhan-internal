<!-- Modal -->
<div class="modal fade" id="formCreate" tabindex="-1" role="dialog" aria-labelledby="formCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('data-kerawanan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="formCreateLabel">
                        Create Data Kerawanan
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Kategori*</label>
                                <div class="select2-blue">
                                    <select class="select2" multiple="multiple" data-placeholder="Select a State"
                                        style="width: 100%;" name="kategori[]" required>
                                        <option>Pilih Kategori</option>
                                        @foreach ($list_kategori as $kategori)
                                            <option value="{{ $kategori }}">{{ $kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="namaLokasi">Nama Lokasi Kegiatan</label>
                                <input type="text" class="form-control" id="namaLokasi" name="nama_lokasi"
                                    required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="koordinatLokasi">Koordinat Lokasi Kegiatan</label>
                                <input type="text" class="form-control" id="koordinatLokasi" name="koordinat_lokasi"
                                    required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="fotoLokasi">Foto Lokasi Kegiatan</label>
                                <input type="file" class="form-control-file" id="fotoLokasi" name="foto_lokasi"
                                    required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="infoBisnis">Informasi Terkait Proses Bisnis</label>
                                <input type="text" class="form-control" id="infoBisnis" name="informasi_bisnis"
                                    required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="atensiKomoditas">Atensi Komoditas</label>
                                <input type="text" class="form-control" id="atensiKomoditas" name="atensi_komoditas"
                                    required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="riwayatPenindakan">Riwayat Penindakan oleh Bidang yang
                                    Mengawasi/Melayani</label>
                                <input type="text" class="form-control" id="riwayatPenindakan"
                                    name="riwayat_penindakan" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="riwayatPelanggaran">Riwayat Terjadinya Pelanggaran Integritas oleh Pegawai
                                    DJBC</label>
                                <input type="text" class="form-control" id="riwayatPelanggaran"
                                    name="riwayat_pelanggaran" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="tingkatPelanggaran">Tingkat Pelanggaran Integritas yang Terjadi</label>
                                <input type="text" class="form-control" id="tingkatPelanggaran"
                                    name="tingkat_pelanggaran" required />
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
