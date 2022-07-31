<!DOCTYPE html>
<html lang="en" style="scroll-behavior:smooth !important;">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Tambah Guru </title>
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
                <div class="card card-success">
                    <div class="col-md-12 text-center">
                        <p class="registration-title font-weight-bold display-4 mt-4" style="color:black; font-size: 50px;">
                        @if(isset($guru)) Edit Guru @else Tambah Guru @endif</p>
                        <hr>
                    </div>
                    <div id="detail" class="card-body">
                    @if(isset($guru))
                        <form method="post" enctype="multipart/form-data" action="{{ route('admin.edit_guru') }}">
                    @else
                        <form method="post" enctype="multipart/form-data" action="{{ route('admin.tambah_guru') }}">
                    @endif
                            <div class="col-md-12 bg-white" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Nomor Induk Pengajar</label>
                                        <input autocomplete="off" required type="text" maxlength="8" name="nip" class="form-control"
                                        @if(isset($guru)) value="{{$guru->nip}}" readonly @endif>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Nama Guru</label>
                                        <input autocomplete="off" required type="text"  name="nama" class="form-control"
                                        @if(isset($guru)) value="{{$guru->nama}}" @endif>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Alamat Guru</label>
                                        <input autocomplete="off" required type="text"  name="alamat" class="form-control"
                                        @if(isset($guru)) value="{{$guru->alamat}}" @endif>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Email Guru</label>
                                        <input autocomplete="off" required type="text"  name="email" class="form-control"
                                        @if(isset($guru)) value="{{$guru->email}}" @endif>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block btn-success">
                                @if(isset($guru)) Edit Guru @else Tambah Guru @endif</button>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
            </div>
        </section>
    </div>
    
    @if(Session::has("alert"))
    <script>
        Swal.fire({
            icon: "{{ Session::get('icon') }}",
            title: "{{ Session::get('title') }}",
            text: "{{ Session::get('text') }}",
            showConfirmButton: false,
            timer: 2500
        })
    </script>
    @endif
    <!-- End Main Content -->

    @include("admin.footer")