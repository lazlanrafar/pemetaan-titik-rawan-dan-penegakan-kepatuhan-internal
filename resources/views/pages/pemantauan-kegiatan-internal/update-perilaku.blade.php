<!-- Modal -->
<div class="modal fade" id="formUpdatePerilaku{{ $detail->id }}" tabindex="-1" role="dialog"
    aria-labelledby="formUpdatePerilakuLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="/pemantauan-kegiatan-internal-detail/{{ $detail->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="formUpdatePerilakuLabel">
                        Update Perilaku Kerja Pegawai
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pelanggaran</label>
                                <select name="is_pelanggaran" class="form-control">
                                    <option value="true" @if ($detail->is_pelanggaran) selected @endif>Ya</option>
                                    <option value="false" @if (!$detail->is_pelanggaran) selected @endif>Tidak
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pelanggaran yang Dilakukan</label>
                                <input type="text" class="form-control" name="pelanggaran"
                                    value="{{ $detail->pelanggaran }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Penghargaan</label>
                                <select name="is_penghargaan" class="form-control">
                                    <option value="true" @if ($detail->is_penghargaan) selected @endif>Ya</option>
                                    <option value="false" @if (!$detail->is_penghargaan) selected @endif>Tidak
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Penghargaan yang Dilakukan</label>
                                <input type="text" class="form-control" name="penghargaan"
                                    value="{{ $detail->penghargaan }}" />
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
