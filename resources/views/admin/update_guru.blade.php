<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Data Siswa - OnSchool</title>

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

    @include("admin.nav")

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
    <!-- End Main Content -->

    @include("admin.footer")