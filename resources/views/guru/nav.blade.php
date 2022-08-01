<!-- Start Sidebar -->
<div id="app">
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class=" navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" style="margin-bottom:4px !important;" src="{{ asset('/stisla-assets/img/avatar/avatar-2.png') }}" class="rounded-circle mr-1 my-auto border-white">
                        <div class="d-sm-none d-lg-inline-block" style="font-size:15px;">
                        @if(Session::has("nama")) {{ Session::get("nama") }} @else Guru @endif</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-title">OnSchool</div>
                        <a href="{{ route('guru.logout') }}" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i>Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand text-danger">
                    <div>
                        <a href="{{ route('admin') }}" style="font-size: 30px;font-weight:900;font-family: 'Poppins', sans-serif;" class="text-success text-center"><i style="font-size: 30px;" class="fas fa-graduation-cap"></i> |
                            OnSchool  </a>
                    </div>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="{{ route('admin') }}">OS  </a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header ">Dashboard</li>
                    <li class="nav-item dropdown active">
                        <a href="{{ route('admin') }}" class="nav-link"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
                    </li>
                    <li class="menu-header">Manajemen Kelas</li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i>
                            <span>Kelas</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('guru.jadwal') }}">Jadwal</a>
                            </li>
                            <li><a class="nav-link" href="{{ route('guru.kehadiran_siswa') }}">Kehadiran Siswa</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
</div>
<!-- End Sidebar -->