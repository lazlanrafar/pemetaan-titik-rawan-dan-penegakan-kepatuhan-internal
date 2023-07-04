@extends('layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pemantauan Kegiatan Internal</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @include('includes.error-card')
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-poppins text-sm">
                                <table>
                                    <tr>
                                        <td class="fw-medium" style="min-width: 130px">Nama Kegiatan</td>
                                        <td style="min-width: 20px">:</td>
                                        <td>{{ $item->nama_kegiatan }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Jenis Kegiatan</td>
                                        <td>:</td>
                                        <td>{{ $item->jenis_kegiatan }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-medium">Lokasi</td>
                                        <td>:</td>
                                        <td>{{ $item->lokasi_kegiatan }}</td>
                                    </tr>
                                </table>
                            </div>
                            <table id="defaultTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Hadir</th>
                                        <th>Pelanggaran</th>
                                        <th>Penghargaan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($list_pegawai as $detail)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $detail->pegawai->nip }}</td>
                                            <td>{{ $detail->pegawai->name }}</td>
                                            <td>
                                                @if ($detail->is_kehadiran)
                                                    <span class="badge badge-success">Hadir</span>
                                                @else
                                                    <span class="badge badge-danger">Tidak Hadir</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($detail->is_pelanggaran)
                                                    {{ $detail->pelanggaran }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>
                                                @if ($detail->is_penghargaan)
                                                    {{ $detail->penghargaan }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>
                                                @if (!$detail->is_kehadiran)
                                                    <form id="formHadir{{ $detail->id }}"
                                                        action="/pemantauan-kegiatan-internal-hadir/{{ $detail->id }}"
                                                        method="POST" class="d-inline">

                                                        <input type="hidden" name="kegiatan_internal_id"
                                                            value="{{ $item->id }}">
                                                        @csrf
                                                        @method('put')
                                                        <a type="button" class="btn btn-primary"
                                                            onclick="handleHadir({{ $detail->id }})">
                                                            <i class="fa fa-check"></i>
                                                        </a>
                                                    </form>

                                                    <script>
                                                        function handleHadir(id) {
                                                            Swal.fire({
                                                                title: 'Apakah kamu yakin?',
                                                                text: "kamu akan mengubah status kehadiran pegawai!",
                                                                icon: 'warning',
                                                                showCancelButton: true,
                                                                confirmButtonColor: '#3085d6',
                                                                cancelButtonColor: '#d33',
                                                                confirmButtonText: 'Ya, hapus!'
                                                            }).then((result) => {
                                                                if (result.isConfirmed) {
                                                                    document.getElementById('formHadir' + id).submit();
                                                                }
                                                            })
                                                        }
                                                    </script>
                                                @endif
                                                <a type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#formUpdate{{ $detail->id }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                @include('pages.pemantauan-kegiatan-internal.detail-update')

                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
