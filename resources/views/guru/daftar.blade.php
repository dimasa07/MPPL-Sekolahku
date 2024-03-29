<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('/img/favicon.png') }}" type="image/png">
    <title>Sekolahku | OnSchool</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendors/lightbox/simpleLightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendors/popup/magnific-popup.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/js/popper.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.1/lottie.min.js"></script>
    <script src="{{ asset('/js/lottie.js') }}"></script>
</head>

<body style="background-color: #edf2f7">

    @include("templates.menu")


    <!-- Registration Form Area -->
    <section>
        <div class="container mt-5 mb-5" id="registration">
            <div class="row bg-registration p-3">
                <div class="col-md-12 text-center">
                    <p class="registration-title font-weight-bold display-4 mt-4" style="font-size: 50px;">
                        Pendaftaran Guru OnSchool</p>
                    <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan dibawah ini </p>
                    <hr>
                </div>
                <div class="col-md-6 mx-auto text-center">
                    <div class="bodymovin" data-icon="{{ asset('/json/registration-animation.json') }}"></div>
                </div>
                <div class="col-md-6 mx-auto my-auto mt--5">
                    <form action="{{ route('guru.daftar') }}" method="post">
                        <div class="form-group">
                            <label for="nip" class="label-font-register">Nomor Induk Pengajar</label>
                            <input type="text" length="8" autocomplete="off" class="form-control effect-9" name="nip" id="nis">

                        </div>
                        <div class="form-group">
                            <label for="username" class="label-font-register">Username</label>
                            <input type="text" class="form-control" name="username" id="username">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password" class="label-font-register">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="retype_password" class="label-font-register">Retype password</label>
                                <input type="password" class="form-control" name="re-password" id="retype_password">
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input checkbox" type="checkbox" id="defaultCheck1" onchange="document.getElementById('btnsubmit').disabled = !this.checked;">
                            <label class=" form-check-label" for="defaultCheck1">
                                Saya setuju dan ingin melanjutkan
                            </label>
                        </div>
                        <p class="terms">Dengan mendaftar anda menyetujui <i>privasi dan persyaratan ketentuan
                                hukum kami </i>
                            baca selengkapnya <a href="#"> disini</a></p>
                        <button type="submit" name="submit" id="btnsubmit" disabled class="btn btn-block btn-modal btn-submit">Daftar
                            Sekarang!</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Registration Form Area -->

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

    <!-- Start Checkbox Scripts -->
    <script>
        $('.tab1_btn').prop('disabled', !$('.tab1_chk:checked')
            .length);
        $('input[type=checkbox]').click(function() {
            if ($('.tab1_chk:checkbox:checked').length > 0) {
                $('.btn-submit').prop('disabled', false);
            } else {
                $('.btn-submit').prop('disabled', true);
            }
        });
    </script>
    <!-- End Checkbox Scripts -->

    @include("templates.footer")