<aside class="main-sidebar sidebar-light-primary ">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ url('/logo.png') }}" alt="Logo" class="brand-image" />
        <span class="brand-text text-poppins fw-medium">Sipetir.</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar border-right">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header font-weight-bold">Main</li>
                <li class="nav-item">
                    <a href="/data-kerawanan" class="nav-link {{ Request::is('data-kerawanan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Data Kerawanan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pengawasan-pelaksanaan-tugas"
                        class="nav-link {{ Request::is('pengawasan-pelaksanaan-tugas') ? 'active' : '' }}">
                        <i class="nav-icon fa  fa-exclamation-triangle"></i>
                        <p>Pengawasan Tugas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pendampingan-pemeriksaan-fisik"
                        class="nav-link {{ Request::is('pendampingan-pemeriksaan-fisik') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-medkit"></i>
                        <p>Pemeriksaan Fisik</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pemantauan-kegiatan-internal"
                        class="nav-link {{ Request::is('pemantauan-kegiatan-internal') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-eye"></i>
                        <p>Pemantauan Kegiatan</p>
                    </a>
                </li>
                <li class="nav-header font-weight-bold">Setup</li>
                <li class="nav-item">
                    <a href="/pegawai" class="nav-link {{ Request::is('pegawai') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>Pegawai Kantor</p>
                    </a>
                </li>
                @if (request()->session()->get('user')['role'] === 'Superuser')
                    <li class="nav-item">
                        <a href="/user" class="nav-link {{ Request::is('user') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>User</p>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</aside>
