<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Data Siswa - Learnify</title>

    <!-- General CSS Files -->
    <link rel="icon" href="{{ asset('/img/favicon.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('/stisla-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/stisla-assets/css/components.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.0/dist/sweetalert2.all.min.js"></script>

</head>

<body>

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
                            <img alt="image" style="margin-bottom:3px !important;" src="{{ asset('/stisla-assets/img/avatar/avatar-2.png') }}" class="rounded-circle mr-1 my-auto">
                            <div class="d-sm-none d-lg-inline-block" style="font-size:15px;">Hello, Admin</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Admin - Learnify</div>
                            <a href="{{ route('admin.logout') }}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
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
                                Learnify <sup>3</sup> </a>
                        </div>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="{{ route('admin') }}">LY</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header ">Dashboard</li>
                        <li class="nav-item dropdown">
                            <a href="{{ route('admin') }}" class="nav-link"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
                        </li>
                        <li class="menu-header">Management Siswa</li>
                        <li class="nav-item dropdown ">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i>
                                <span>Siswa</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<{{ route('admin.data_siswa') }}">Data Siswa</a></li>
                            </ul>
                        </li>
                        <li class="menu-header">Management Guru</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
                                <span>Guru</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('admin.data_guru') }}">Data Guru</a>
                                </li>
                                <li><a class="nav-link" href="{{ route('admin.tambah_guru') }}">Tambah Data Guru</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-header">Management Materi</li>
                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i>
                                <span>Materi</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('admin.data_materi') }}">Data Materi</a>
                                </li>
                                <li><a class="nav-link" href="{{ route('admin.tambah_materi') }}">Tambah Materi</a>
                                </li>

                            </ul>
                        </li>
                         
                </aside>
            </div>
            <!-- End Sidebar -->

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="">
                        <div class="card" style="width:100%;">
                            <div class="card-body">
                                <h2 class="card-title" style="color: black;">Update Data Guru</h2>
                                <hr>
                                <p class="card-text"> Update data siswa meliputi Email dan Nama Lengkap.
                                    Kita tidak bisa mengubah password guru, Hanya guru yang dapat mengubah passwordnya
                                    sendiri.
                                </p>
                                <a href="#detail" class="btn btn-success">Saya paham dan
                                    ingin melanjutkan ⭢</a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-success">
                        <div class="col-md-12 text-center">
                            <p class="registration-title font-weight-bold display-4 mt-4" style="color:black; font-size: 50px;">
                                Update Data Guru</p>
                            <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan
                                dibawah </p>
                            <hr>
                        </div>
                        <?php
                        if (isset($user))
                            foreach ($user as $u) { ?>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.guru_edit') }}">

                                    <div class="form-group">
                                        <label for="nip">Nomor Induk Pegawai</label>
                                        <input readonly id="nip" type="text" class="form-control" value="<?= $u->nip ?>" name="nip">
                                        <div class="invalid-feedback">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" value="<?= $u->email ?>" class="form-control" name="email">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group" id="detail">
                                        <label for="nama">Nama Lengkap</label>
                                        <input id="nama" type="text" value="<?= $u->nama_guru ?>" class="form-control" name="nama">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">
                                            Update data ⭢
                                        </button>
                                    </div>
                                </form>
                            <?php } ?>
                            </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- End Main Content -->

    <!-- Start Footer -->
    <footer class="main-footer">
        <div class="text-center">
            Copyright &copy; 2022 <div class="bullet"></div> Admin
        </div>
    </footer>
    <!-- End Footer -->

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        function autofill() {
            var nama_guru = $("#namaguru").val();
            $.ajax({
                url: '../autofill.php',
                data: "nama_guru=" + nama_guru,
            }).done(function(data) {
                var json = data,
                    obj = JSON.parse(json);
                $('#nama_mapel').val(obj.nama_mapel);
            });
        }
    </script>
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('/stisla-assets/js/stisla.js') }}"></script>
    <!-- JS Libraies -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <!-- Template JS File -->
    <script src="{{ asset('/stisla-assets/js/scripts.js') }}"></script>
    <script src="{{ asset('/stisla-assets/js/custom.js') }}"></script>
    <!-- Page Specific JS File -->
</body>

</html>