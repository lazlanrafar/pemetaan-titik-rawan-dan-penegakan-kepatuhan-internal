@extends('layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pengawasan Pelaksanaan Tugas</h1>
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
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#formCreate"><i
                                    class="fa fa-plus"></i> Tambah</a>
                            @include('pages.pengawasan-pelaksanaan-tugas.create')

                            <table id="defaultTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Petugas</th>
                                        <th>Jenis Waskat</th>
                                        <th>Hasil Pelaksanaan</th>
                                        <th>Keimpulan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>{{ $item->petugas->name }}</td>
                                            <td>
                                                <ul>
                                                    @foreach ($item->jenis_waskat as $jenis)
                                                        <li>{{ $jenis }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>{{ $item->hasil_pelaksanaan }}</td>
                                            <td>{{ $item->kesimpulan }}</td>
                                            <td style="min-width:180px">
                                                <a href="{{ route('pengawasan-pelaksanaan-tugas.show', $item->id) }}"
                                                    class="btn btn-info">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                <a type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#formUpdate{{ $item->id }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                @include('pages.pengawasan-pelaksanaan-tugas.update')
                                                <form id="formDelete{{ $item->id }}"
                                                    action="{{ route('pengawasan-pelaksanaan-tugas.destroy', $item->id) }}"
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
