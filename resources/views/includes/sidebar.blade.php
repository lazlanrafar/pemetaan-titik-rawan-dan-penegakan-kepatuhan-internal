<aside class="main-sidebar sidebar-light-primary ">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{ url('/logo.png') }}" alt="Logo" class="brand-image" />
        <span class="brand-text font-weight-normal">Logo</span>
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
                <li class="nav-header">Main</li>
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
                <li class="nav-header">Setup</li>
                <li class="nav-item">
                    <a href="/pegawai" class="nav-link {{ Request::is('pegawai') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Pegawai</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/user" class="nav-link {{ Request::is('user') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>User</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
