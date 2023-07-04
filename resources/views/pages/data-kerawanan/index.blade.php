@extends('layouts.app') @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Kerawanan</h1>
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
                            @include('pages.data-kerawanan.create')

                            <hr />

                            <div style="max-width: 400px">
                                <label>Kategori</label>
                                <select class="form-control" id="filterCategory" onchange="onChangeFilterCategory()">
                                    <option {{ $kategori_active === 'All' ? 'selected' : '' }}>All</option>
                                    @foreach ($list_kategori as $kategori)
                                        <option value="{{ $kategori }}"
                                            {{ $kategori_active === $kategori ? 'selected' : '' }}>{{ $kategori }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <script>
                                function onChangeFilterCategory() {
                                    var value = document.getElementById('filterCategory').value;
                                    if (value == 'All') {
                                        window.location.href = "{{ route('data-kerawanan.index') }}";
                                    } else {
                                        window.location.href = "{{ route('data-kerawanan.index') }}?kategori=" + value;
                                    }
                                }
                            </script>

                            <table id="defaultTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th style="min-width: 100px">Foto Lokasi</th>
                                        <th>Nama Lokasi</th>
                                        <th style="min-width: 200px">Kategori</th>
                                        {{-- <th>Informasi Bisnis</th>
                                        <th>Atensi Komoditas</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>
                                                <img src="{{ Storage::url($item->foto_lokasi) }}" alt="Foto Lokasi"
                                                    height="100px" />
                                            </td>
                                            <td>{{ $item->nama_lokasi }}</td>
                                            <td>
                                                <ul>
                                                    @foreach ($item->kategori as $kategori)
                                                        <li>{{ $kategori }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            {{-- <td>{{ Str::limit($item->informasi_bisnis, 200) }}</td>
                                            <td>{{ Str::limit($item->atensi_komoditas, 200) }}</td> --}}
                                            <td style="min-width:150px">
                                                <a type="button" class="btn btn-info" data-toggle="modal"
                                                    data-target="#modalDetail{{ $item->id }}">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                @include('pages.data-kerawanan.detail')
                                                <a type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#formUpdate{{ $item->id }}">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                @include('pages.data-kerawanan.update')
                                                <form id="formDelete{{ $item->id }}"
                                                    action="{{ route('data-kerawanan.destroy', $item->id) }}"
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
