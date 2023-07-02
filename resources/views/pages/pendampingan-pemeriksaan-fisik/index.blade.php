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
                            <div class="d-sm-flex justify-content-between">
                                <div class="mb-3 mb-sm-0">
                                    <a type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#formCreate"><i class="fa fa-plus"></i> Tambah</a>
                                    @include('pages.pendampingan-pemeriksaan-fisik.create')
                                </div>
                                <form action="/pendampingan-pemeriksaan-fisik">
                                    <div class="input-group">
                                        <input type="search" class="form-control form-control" name="search"
                                            placeholder="Search..." value="{{ $search }}">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <br />
                            <br />
                            <div class="row text-poppins text-sm">
                                @foreach ($items as $item)
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card" style="max-width: 350px">
                                            <div class="card-body">
                                                <p class="card-text font-weight-bold mb-0">{{ $item->tanggal }}</p>
                                                <p class="card-text text-muted mb-0">{{ $item->petugas->name }}</p>
                                            </div>
                                            <img class="card-img-top" src="{{ Storage::url($item->bukti_foto_1) }}"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title mb-1">{{ Str::limit($item->lokasi, 65, '...') }}</h5>
                                                {{-- set lokasi when length text more than 100 set to ... --}}
                                                <p class="card-text text-muted">{{ $item->nomor_dokumen }}</p>
                                                <p class="card-text">{{ $item->tanggal_dokumen }}</p>
                                                <div class="d-flex justify-content-between">
                                                    <a href="#" class="btn btn-info">
                                                        <div class="fa fa-eye"></div>
                                                        Detail
                                                    </a>
                                                    <div>
                                                        <a type="button" class="btn btn-warning" data-toggle="modal"
                                                            data-target="#formUpdate{{ $item->id }}">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        @include('pages.pendampingan-pemeriksaan-fisik.update')

                                                        <form id="formDelete{{ $item->id }}"
                                                            action="{{ route('pegawai.destroy', $item->id) }}"
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

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
