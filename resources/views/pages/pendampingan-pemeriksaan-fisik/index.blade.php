@extends('layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pendampingan Pemeriksaan Fisik</h1>
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
                            <div class="mb-3 mb-sm-0">
                                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#formCreate"><i
                                        class="fa fa-plus"></i> Tambah</a>
                                @include('pages.pendampingan-pemeriksaan-fisik.create')
                            </div>

                            <table id="defaultTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Bukti Foto</th>
                                        <th style="min-width: 80px">Tanggal</th>
                                        <th>Petugas</th>
                                        <th>Lokasi</th>
                                        <th>No Dokumen</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>
                                                <img src="{{ Storage::url($item->bukti_foto_1) }}" alt="Foto"
                                                    height="100px" />
                                            </td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>{{ $item->petugas->name }}</td>
                                            <td>{{ $item->lokasi }}</td>
                                            <td>{{ $item->nomor_dokumen }}</td>
                                            <td style="min-width:150px">
                                                <a type="button" class="btn btn-info" data-toggle="modal"
                                                    data-target="#modalDetail{{ $item->id }}">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                @include('pages.pendampingan-pemeriksaan-fisik.detail')
                                                <a type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#formUpdate{{ $item->id }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                @include('pages.pendampingan-pemeriksaan-fisik.update')
                                                <form id="formDelete{{ $item->id }}"
                                                    action="{{ route('pendampingan-pemeriksaan-fisik.destroy', $item->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <a type="button" class="btn btn-danger"
                                                        onclick="handleDelete({{ $item->id }})">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </form>

                                                <script>
                                                    function handleDelete(id) {
                                                        Swal.fire({
                                                            title: 'Apakah kamu yakin?',
                                                            text: "kamu akan menghapus data ini!",
                                                            icon: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Ya, hapus!'
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                document.getElementById('formDelete' + id).submit();
                                                            }
                                                        })
                                                    }
                                                </script>
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
