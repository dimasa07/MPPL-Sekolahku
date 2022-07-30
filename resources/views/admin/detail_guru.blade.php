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

    @include("admin.nav")

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="card" style="width:100%;">
                <div class="card-body">
                    <h2 class="card-title" style="color: black;">Detail Guru | nama </h2>
                    <hr>
                    <p class="card-text">After I ran into Helen at a restaurant, I realized she was just office pretty drop-dead date put in in a deck for our standup today. Who's responsible for the ask for this request? who's responsible for the ask for this request? but moving the goalposts gain traction.
                    </p>
                    <a href="#detail" class="btn btn-success">Saya paham dan
                        ingin melanjutkan ⭢</a>
                </div>
            </div>
            <div id="detail" class="col-md-12 bg-white p-3" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                <h1 class="font-weight-bold card-title text-center" style="color: black;">Detail Guru </h1>
                <p class="text-center" style="line-height: 5px;">Berikut data detail yang terdapat di
                    database, meliputi NIP, Nama, Email
                    dan Mapel yang diajar.</p>
                <hr>
                <table style="width: 100%" class="container text-center">
                    <tbody>
                        <tr style="border-bottom: 0.5px solid #6c757d;">
                            <td><span class="font-weight-bold">Nomor Induk Pegawai :</span></td>
                            <td></td>
                        </tr>
                        <tr style="border-bottom: 0.5px solid #6c757d;">
                            <td><span class="font-weight-bold">Nama Guru :</span></td>
                            <td> nama</td>
                        </tr>
                        <tr style="border-bottom: 0.5px solid #6c757d;">
                            <td><span class="font-weight-bold">Alamat Email :</span></td>
                            <td>email</td>
                        </tr>
                        <tr style="border-bottom: 0.5px solid #6c757d;">
                            <td><span class="font-weight-bold">Password : </span></td>
                            <td>Terenkripsi</td>
                        </tr>
                        <tr style="border-bottom: 0.5px solid #6c757d;">
                            <td><span class="font-weight-bold">Mata Pelajaran :</span></td>
                            <td>mapel</td>
                        </tr>
                    </tbody>
                </table>
                <p style="font-weight:500px!important;font-size:18px;text-align:justify;" class="text-justify">
                </p>
                <a href="{{ route('admin.data_guru') }}" class="btn btn-success btn-block">Kembali</a>
            </div>
        </section>
    </div>
    <!-- End Main Content -->

    @include("admin.footer")