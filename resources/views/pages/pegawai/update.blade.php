<!-- Modal -->
<div class="modal fade" id="formUpdate{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="formUpdateLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('pegawai.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdateLabel">
                        Update Pegawai - {{ $item->name }}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="namalengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" id="namalengkap" value="{{ $item->name }}"
                                    placeholder="Enter Nama Lengkap" name="name" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" class="form-control" id="nip" placeholder="Enter NIP"
                                    value="{{ $item->nip }}" name="nip" required />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="pangkat">Pangkat</label>
                                <input type="text" class="form-control" id="pangkat" placeholder="pangkat"
                                    value="{{ $item->pangkat }}" name="pangkat" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="golongan">Golongan</label>
                                <input type="text" class="form-control" id="golongan" placeholder="golongan"
                                    value="{{ $item->golongan }}" name="golongan" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" placeholder="jabatan"
                                    value="{{ $item->jabatan }}" name="jabatan" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="unit_eselon_3">Unit Eselon III</label>
                                <input type="text" class="form-control" id="unit_eselon_3"
                                    value="{{ $item->unit_eselon_3 }}" placeholder="Unit Eselon III"
                                    name="unit_eselon_3" />
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
