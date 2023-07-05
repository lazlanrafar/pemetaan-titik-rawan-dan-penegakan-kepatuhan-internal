<!-- Modal -->
<div class="modal fade" id="modalDetail{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="modalDetailLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetailLabel">
                    Detail Pegawai - {{ $item->name }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-poppins text-sm">
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Nama</p>
                    <p>{{ $item->name }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">NIP</p>
                    <p>{{ $item->nip }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Pangkat</p>
                    <p>{{ $item->pangkat }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Golongan</p>
                    <p>{{ $item->golongan }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Jabatan</p>
                    <p>{{ $item->jabatan }}</p>
                </div>
                <div class="mb-4">
                    <p class="mb-0 fw-medium">Unit Eselon III</p>
                    <p>{{ $item->unit_eselon_3 }}</p>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4 ">
                            <p class="mb-0 fw-medium text-success">Penghargaan</p>
                            <p>{{ $item->penghargaan }}</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0 fw-medium text-danger">Pelanggaran</p>
                            <p>{{ $item->pelanggaran }}</p>
                        </div>
                        <hr>
                        <div class="mb-4">
                            <p class="mb-0 fw-medium">Jumlah Kegiatan yang Diikuti</p>
                            <p>{{ $item->total_kegiatan }}</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0 fw-medium">Presentase Kehadiran</p>
                            <p>{{ $item->presentase_kehadiran }} %</p>
                        </div>
                        <div class="mb-4">
                            <p class="mb-0 fw-medium">Nilai Integritas</p>
                            <p class="font-weight-bold">
                                @if ($item->total_point < 60)
                                    <span class="text-danger">
                                        {{ $item->total_point }}
                                    </span>
                                @elseif ($item->total_point <= 75)
                                    <span class="text-warning">
                                        {{ $item->total_point }}
                                    </span>
                                @else
                                    <span class="text-success">
                                        {{ $item->total_point }}
                                    </span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
