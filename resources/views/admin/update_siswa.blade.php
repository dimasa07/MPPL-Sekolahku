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
                        <h2 class="card-title" style="color: black;">Update data siswa</h2>
                        <hr>
                        <p class="card-text">After I ran into Helen at a restaurant, I realized she was just office pretty drop-dead date put in in a deck for our standup today. Who's responsible for the ask for this request? who's responsible for the ask for this request? but moving the goalposts gain traction.
                        </p>
                        <a href="#detail" class="btn btn-success">Saya paham dan
                            ingin melanjutkan ⭢</a>
                    </div>
                </div>
            </div>
            <form action="{{ route('admin.siswa_edit') }}" enctype="multipart/form-data" method="post">
                <?php
                if (isset($user))
                    foreach ($user as $u) { ?>
                    <div class="">
                        <div class="hero text-white hero-bg-image" data-background="{{ asset('/stisla-assets/img/unsplash/eberhard-grossgasteiger-1207565-unsplash.jpg') }}">
                            <div class="col-md-4 mx-auto rounded-circle bg-white p-3" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                                <img src="" class="card-img-top  rounded-circle img-responsive" alt="...">
                            </div>
                            <div class="input-group mt-3 mx-auto" style="width: 50%;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Upload Photo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id="detail" class="col-md-12 bg-white p-3" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                        <h1 class="font-weight-bold card-title text-center" style="color: black;">Update Data
                            Siswa
                        </h1>
                        <p class="text-center" style="line-height: 5px;">Silahkan isi data dibawah untuk update
                            data, dan upload file diatas untuk update data profile picture</p>
                        <hr>
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $u->id ?>">
                            <input type="hidden" name="password" value="<?= $u->password ?>">
                            <input type="hidden" name="is_active" value="<?= $u->is_active ?>">
                            <input type="hidden" name="date_created" value="<?= $u->date_created ?>">
                            <label for="exampleInputEmail1" class="font-weight-bold" style="font-size: 20px;">Nama</label>
                            <input type=" text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="font-weight-bold" style="font-size: 20px;">Email</label>
                            <input type="email" class="form-control" readonly name="email" value="" id="exampleInputPassword1">
                        </div>
                        <input type="submit" value="Update ⭢" class="btn btn-success btn-block">
                    </div>
                <?php } ?>
            </form>
        </section>
    </div>
    <!-- End Main Content -->

    @include("admin.footer")