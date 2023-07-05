@extends('layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pegawai</h1>
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
                                @include('pages.pegawai.create')
                            @endif

                            <table id="defaultTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Pangkat</th>
                                        <th>Golongan</th>
                                        <th>Kehadiran</th>
                                        <th>Nilai Integritas</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $item->nip }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->pangkat }}</td>
                                            <td>{{ $item->golongan }}</td>
                                            <td>{{ $item->presentase_kehadiran }} %</td>
                                            <td>
                                                @if ($item->total_point < 60)
                                                    <span class="badge badge-danger">
                                                        {{ $item->total_point }}
                                                    </span>
                                                @elseif ($item->total_point <= 75)
                                                    <span class="badge badge-warning">
                                                        {{ $item->total_point }}
                                                    </span>
                                                @else
                                                    <span class="badge badge-success">
                                                        {{ $item->total_point }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                @if (request()->session()->get('user')['role'] === 'Pelaksana')
                                                    <a type="button" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#formUpdatePerilaku{{ $item->id }}">
                                                        Perilaku
                                                    </a>
                                                    @include('pages.pegawai.update-perilaku')
                                                    <form id="formDelete{{ $item->id }}"
                                                        action="{{ route('pegawai.destroy', $item->id) }}" method="POST"
                                                        class="d-inline">
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
                                                    @include('pages.pegawai.update')
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
