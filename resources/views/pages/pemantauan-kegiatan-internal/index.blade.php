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
                            @if (request()->session()->get('user')['role'] === 'Pelaksana')
                                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#formCreate"><i
                                        class="fa fa-plus"></i> Tambah</a>
                                @include('pages.pemantauan-kegiatan-internal.create')
                            @endif

                            <table id="defaultTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Petugas</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Jenis</th>
                                        <th>Tempat</th>
                                        <th>Total Pegawai</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $item->petugas->name }}</td>
                                            <td>{{ $item->nama_kegiatan }}</td>
                                            <td>{{ $item->jenis_kegiatan }}</td>
                                            <td>{{ $item->lokasi_kegiatan }}</td>
                                            <td>{{ $item->total_pegawai }}</td>
                                            <td>
                                                <a type="button" class="btn btn-info"
                                                    href="/pemantauan-kegiatan-internal/{{ $item->id }}">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                @if (request()->session()->get('user')['role'] === 'Pelaksana')
                                                    <form id="formDelete{{ $item->id }}"
                                                        action="{{ route('pemantauan-kegiatan-internal.destroy', $item->id) }}"
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
                                                    <a type="button" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#formUpdate{{ $item->id }}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    @include('pages.pemantauan-kegiatan-internal.update')
                                                @endif
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
