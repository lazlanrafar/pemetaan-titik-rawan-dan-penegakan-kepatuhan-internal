@extends('layouts.app') @section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Selamat Datang {{ request()->session()->get('user')['name'] }} 👋</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-none">
                        <img class="card-img-top" src="{{ url('/bg-login.jpg') }}" alt="Card image cap" height="300"
                            style="object-fit: cover; object-position: top">
                        <div class="card-body text-poppins">
                            <p> Aplikasi Pemetaan Titik Rawan merupakan aplikasi yang dikembangkan oleh Bidang Kepatuhan
                                Internal yang memuat data pemetaan titik rawan integritas, hasil pendampingan pemeriksaan
                                fisik,
                                hasil kegiatan pengendalian internal dan profiling pegawai.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
