<!-- Modal -->
<div class="modal fade" id="formArahan{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="formArahanLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('pemantauan-kegiatan-internal.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id_pengarah" value="{{ request()->session()->get('user')['id'] }}">
                <div class="modal-header">
                    <h5 class="modal-title" id="formArahanLabel">
                        Update Data Arahan
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="arahan">Arahan</label>
                                <textarea class="form-control" id="arahan" name="arahan" required>{{ $item->arahan }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
