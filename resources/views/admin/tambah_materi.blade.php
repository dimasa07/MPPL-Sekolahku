<!DOCTYPE html>
<html lang="en" style="scroll-behavior:smooth !important;">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Tambah Data Materi - OnSchool </title>
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
</head>

<body>


    @include("admin.nav")

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="">
                <div class="card" style="width:100%;">
                    <div class="card-body">
                        <h2 class="card-title" style="color: black;">Tambah Data Materi</h2>
                        <hr>
                        <p class="card-text"> After I ran into Helen at a restaurant, I realized she was just office pretty drop-dead date put in in a deck for our standup today. Who's responsible for the ask for this request? who's responsible for the ask for this request? but moving the goalposts gain traction.
                        </p>
                        <a href="#detail" class="btn btn-success">Saya paham dan
                            ingin melanjutkan ⭢</a>
                    </div>
                </div>
                <div class="card card-success">
                    <div class="col-md-12 text-center">
                        <p class="registration-title font-weight-bold display-4 mt-4" style="color:black; font-size: 50px;">
                            Tambah Materi</p>
                        <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan
                            dibawah </p>
                        <hr>
                    </div>
                    <div id="detail" class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.tambah_materi') }}">
                            <div class="col-md-12 bg-white" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                                <form method="post" enctype="multipart/form-data" action="{{ route('guru.tambah_materi') }}">
                                    <input type="hidden" name="id">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Nama Guru</label>
                                            <input autocomplete="off" required type="text" list="nama_guru" onkeyup="autofill()" id="namaguru" name="nama_guru" class="form-control">
                                            <small>List guru sudah tersedia di autocomplete, kalian hanya
                                                tinggal klik input area nya atau dengan cara menulis namanya dan
                                                klik guru yang akan dipilih.</small>
                                            <datalist id=nama_guru>
                                                List Guru
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nama Mata Pelajaran</label>
                                        <input type="text" class="form-control" name="nama_mapel" id="nama_mapel" required placeholder="Pilih nama guru yang valid agar nama mapel muncul" readonly>
                                        <small>Jika nama mapel sudah berganti artinya nama guru yang kamu
                                            masukan di input area adalah valid! jika tidak muncul nama mapel
                                            anda harus klik input area nama guru dan pilih guru yang tersedia
                                            disana.</small>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input required type="file" name="video" required class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Upload
                                                    Video
                                                    Materi Disini</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Deskripsi Materi</label>
                                        <textarea class="form-control" required name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputState">Kelas</label>
                                        <select required id="inputState" name="kelas" class="form-control">
                                            <option selected>Pilih disini</option>
                                            <option value="X">X ( Kelas Sepuluh )</option>
                                            <option value="XI">XI ( Kelas Sebelas )</option>
                                            <option value="XII">XII ( Kelas Dua Belas )</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-success">Tambah
                                        materi ⭢</button>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
            </div>
        </section>
    </div>
    <!-- End Main Content -->

    @include("admin.footer")