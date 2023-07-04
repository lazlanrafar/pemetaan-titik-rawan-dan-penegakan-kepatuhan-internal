<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="formUpdateLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('pemantauan-kegiatan-internal.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdateLabel">
                        Update Kegiatan Internal - {{ $item->nama_kegiatan }}
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
                                    value="{{ $item->petugas->name }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nama_kegiatan">Nama Kegiatan</label>
                                <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan"
                                    value="{{ $item->nama_kegiatan }}" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Jenis Kegiatan</label>
                                <select class="form-control" name="jenis_kegiatan" required>
                                    <option>Pilih Jenis Kegiatan</option>
                                    @foreach ($list_jenis as $jenis)
                                        <option value="{{ $jenis }}"
                                            @if ($item->jenis_kegiatan === $jenis) selected @endif>{{ $jenis }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="lokasi_kegiatan">Lokasi Kegiatan</label>
                                <input type="text" class="form-control" id="lokasi_kegiatan" name="lokasi_kegiatan"
                                    value="{{ $item->lokasi_kegiatan }}" required />
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
