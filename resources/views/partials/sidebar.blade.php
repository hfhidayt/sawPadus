<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="{{ asset('img\icon.png') }}" alt="Logo Padus UTDI" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PADUS UTDI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                {{-- <li class="nav-header">MENU</li> --}}
                @can('admin')
                    <li class="nav-item">
                        <a href="/dashboard/akun" class="nav-link">
                            {{-- <i class="far fa-user"></i> --}}
                            <p>
                                Users
                            </p>
                        </a>
                    </li>
                <li class="nav-item">
                    <a href="/dashboard/kriteria" class="nav-link">
                        {{-- <i class="far fa-user"></i> --}}
                        <p>
                            Kriteria
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/nilai" class="nav-link">
                        {{-- <i class="far fa-user"></i> --}}
                        <p>
                            Nilai
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/hitung" class="nav-link">
                        {{-- <i class="far fa-user"></i> --}}
                        <p>
                            Perhitungan
                        </p>
                    </a>
                </li>
                @endcan
                @can('ketua')
                <li class="nav-item">
                    <a href="/dashboard/hasil" class="nav-link">
                        {{-- <i class="far fa-user"></i> --}}
                        <p>
                            Hasil
                        </p>
                    </a>
                </li>
                @endcan
                @can('anggota')
                <li class="nav-item">
                    <a href="/dashboard/profil" class="nav-link">
                        {{-- <i class="far fa-user"></i> --}}
                        <p>
                            Profil
                        </p>
                    </a>
                </li>
                @endcan
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
