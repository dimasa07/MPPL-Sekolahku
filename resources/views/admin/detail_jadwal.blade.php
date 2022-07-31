<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Data Jadwal</title>
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
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title" style="color: black;">Jadwal Pelajaran Kelas {{ $nama_kelas }}</h2>
                    <hr>
                    <a href="{{ route('admin.tambah_jadwal', ['id_kelas'=>$id_kelas]) }}" class="btn btn-success">Tambah Jadwal</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-white p-4" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                        <div class="table-responsive">
                            <table id="example" class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th scope="col">Mata Pelajaran</th>
                                        <th scope="col">Waktu</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($jadwals as $jadwal)
                                    <tr>
                                        <td>{{ $jadwal->nama_mapel }}</td>
                                        <td>{{ $jadwal->waktu }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.edit_jadwal', ['id_jadwal'=>$jadwal->id_jadwal]) }}" class="btn btn-info">Update</a>
                                            <a href="{{ route('admin.hapus_jadwal', ['id_jadwal'=>$jadwal->id_jadwal,'id_kelas'=>$id_kelas]) }}" class="btn btn-danger remove" onclick="javascript: return confirm('Yakin hapus? Nama Mapel: {{ $jadwal->nama_mapel }} ');">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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