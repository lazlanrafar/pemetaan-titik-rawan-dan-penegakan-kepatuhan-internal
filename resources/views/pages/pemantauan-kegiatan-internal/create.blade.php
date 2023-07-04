<!-- Modal -->
<div class="modal fade" id="formCreate" tabindex="-1" role="dialog" aria-labelledby="formCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('pemantauan-kegiatan-internal.store') }}" method="POST">
                @csrf
                <input type="hidden" name="id_petugas" value="{{ request()->session()->get('user')['id'] }}">
                <div class="modal-header">
                    <h5 class="modal-title" id="formCreateLabel">
                        Create Pemantauan Kegiatan Internal
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
                                <label for="nama_kegiatan">Nama Kegiatan</label>
                                <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan"
                                    required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Jenis Kegiatan</label>
                                <select class="form-control" name="jenis_kegiatan" required>
                                    <option>Pilih Jenis Kegiatan</option>
                                    @foreach ($list_jenis as $jenis)
                                        <option value="{{ $jenis }}">{{ $jenis }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="lokasi_kegiatan">Lokasi Kegiatan</label>
                                <input type="text" class="form-control" id="lokasi_kegiatan" name="lokasi_kegiatan"
                                    required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Pegawai yang Diundang</label>
                                <div class="select2-blue">
                                    <select class="select2" multiple="multiple" data-placeholder="Select a State"
                                        style="width: 100%;" name="list_pegawai[]" required>
                                        <option>Pilih Pegawai</option>
                                        @foreach ($list_pegawai as $pegawai)
                                            <option value="{{ $pegawai->id }}">
                                                {{ $pegawai->name }} - {{ $pegawai->nip }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
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
