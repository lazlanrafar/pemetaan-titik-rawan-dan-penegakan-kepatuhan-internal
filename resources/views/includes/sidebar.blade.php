<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        {{-- <img src="{{ url('/bright-dark.png') }}" alt="AdminLTE Logo" class="brand-image" /> --}}
        <span class="brand-text font-weight-normal">Logo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/laporan" class="nav-link {{ Request::is('laporan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Laporan</p>
                    </a>
                </li>
                <li class="nav-header">Setup</li>
                <li class="nav-item">
                    <a href="/user" class="nav-link {{ Request::is('user') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>User</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
