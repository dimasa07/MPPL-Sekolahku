<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('/img/favicon.png') }}" type="image/png">
    <title>Sekolahku | E-Learning</title>
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
    <!-- Header Menu Area -->
    <header class="header_area" style="background-color: white !important;">
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <ul class="list header_social">
                        <li><a href="https://www.facebook.com/syaaauqi"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/syaaauqi"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://dribbble.com/syaufy"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="https://www.behance.net/syaufy"><i class="fa fa-behance"></i></a></li>
                        <li><a href="https://www.github.com/syauqi"><i class="fa fa-github"></i></a></li>
                        <li><a href="https://www.instagram.com/syaufy"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="float-right">
                    <a class="dn_btn" href="mailto:apps.learnify@gmail.com">apps.learnify@gmail.com</a>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ route('beranda') }}"><img src="{{ asset('/img/logo.png') }}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item" id="nav"><a class="nav-link" href="{{ route('beranda') }}">Beranda</a></li>
                            <li class="nav-item" id="navtentang"><a class="nav-link" href="{{ route('tentang') }}">Tentang</a>
                            </li>
                            <li class="nav-item submenu dropdown" id="navpelajaran">
                                <a href="{{ route('pelajaran') }}" class="nav-link dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Pelajaran</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter">Masuk</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header Menu Area  -->

    <!-- Home Banner Area  -->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="kontak bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Pendaftaran Learnify</h2>
                    <div class="page_link">
                        <a href="{{ route('beranda') }}">Beranda</a>
                        <a href="{{ route('pengguna.daftar') }}">Pendaftaran</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="registration"></div>
    </section>
    <!-- End Home Banner Area  -->

    <!-- Registration Form Area -->
    <div class="container mt-5 mb-5" id="registration">
        <div class="row bg-registration p-3">
            <div class="col-md-12 text-center">
                <p class="registration-title font-weight-bold display-4 mt-4" style="font-size: 50px;">
                    Pendaftaran Learnify</p>
                <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan dibawah ini </p>
                <hr>
            </div>
            <div class="col-md-6 mx-auto text-center">
                <div class="bodymovin" data-icon="{{ asset('/json/registration-animation.json') }}"></div>
            </div>
            <div class="col-md-6 mx-auto my-auto mt--5">
                <form action="{{ route('pengguna.daftar.submit') }}" method="post">
                    <div class="form-group">
                        <label for="nama_lengkap" class="label-font-register">Nama lengkap</label>
                        <input type="text" autocomplete="off" class="form-control effect-9" name="nama" id="nama_lengkap" >
                        
                    </div>
                    <div class="form-group">
                        <label for="email" class="label-font-register">Email</label>
                        <input type="text" class="form-control" name="email" id="email" >
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password" class="label-font-register">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="retype_password" class="label-font-register">Retype password</label>
                            <input type="password" class="form-control" name="retype_password" id="retype_password">
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
    <!-- End Registration Form Area -->

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

    <!--================ Start footer Area  =================-->
    <footer class="footer-area p_60">
        <div class="container">
            <div class="row">
                <div class="col-lg-2  col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h6 class="footer_title">Tentang Kami</h6>
                        <ul class="list">
                            <li><a href="{{ route('tentang') }}">Tentang Learnify</a></li>
                            <li><a href="{{ route('pelajaran.materi') }}">Materi Learnify</a></li>
                            <li><a href="http://smkn1ciamis.id/">Website Resmi Sekolah</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h6 class="footer_title">Masuk - Sign in</h6>
                        <ul class="list">
                            <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter">Untuk Siswa</a></li>
                            <li><a href="{{ route('guru') }}">Untuk Guru</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h6 class="footer_title">Pelajaran - Materi</h6>
                        <ul class="list">
                            <li><a href="javaScript:void(0);">IPA</a></li>
                            <li><a href="javaScript:void(0);">Matematika</a></li>
                            <li><a href="javaScript:void(0);">Bahasa Inggris</a></li>
                            <li><a href="javaScript:void(0);">Bahasa Indonesia</a></li>
                            <li><a href="javaScript:void(0);">Pendidikan Agama Islam</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h6 class="footer_title">Tentang Developer</h6>
                        <ul class="list">
                            <li>Perfectionist Web Developer with one years of experience as a Web Developer and Web Designer. Skilled at Designing and developing Websites. Excellent written and oral communication skills; capable of explaining complex software issues in easy-to-understand terms.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <h4 class="footer_title">Tentang Learnify</h4>
                    <p>
                        Web Edukasi Open Source yang dibuat oleh Syauqi Zaidan Khairan Khalaf. Learnify adalah Web edukasi yang dilengkapi video, materi dan sistem ujian yang tersedia secara gratis. Learnify dibuat ditujukan agar para siswa dan guru dapat terus belajar dan mengajar dimana saja dan kapan saja.
                    </p>
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-md-8 footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <span class="text-danger"> &#10084;</span> by
                    <a href="https://colorlib.com" target="_blank">Colorlib</a> <br> Learnify is made with <span class="text-danger"> &#10084;</span> by <a href="https://github.com/syauqi">Syauqi Zaidan Khairan Khalaf </a> with MIT License
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-md-4 footer-social">
                    <a href="https://www.facebook.com/syaaauqi"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/syaaauqi"><i class="fa fa-twitter"></i></a>
                    <a href="https://dribbble.com/syaufy"><i class="fa fa-dribbble"></i></a>
                    <a href="https://www.behance.net/syaufy"><i class="fa fa-behance"></i></a>
                    <a href="https://www.github.com/syauqi"><i class="fa fa-github"></i></a>
                    <a href="https://www.instagram.com/syaufy"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->


    <!-- Start Login Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title text-dark font-weight-bold" style="color:#212529 !important;" id="exampleModalCenterTitle">
                        Learnify - Masuk Sekarang</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <br>
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img src="{{ asset('/img/modal-login-2.png') }}" class="img-fluid img-responsive mx-auto " style="height: 350px;">
                            </div>
                            <div class=" col-md-6">
                                <form action="{{ route('login.validasilogin') }}" method="post">
                                    <div class="form-group">
                                        <label class="label-font" for="
                                        exampleFormControlInput1">
                                            Email</label>
                                        <input type="text" value="{{ $email }}" class="form-control" name="email" autocomplete="off" id="email" placeholder="Masukan email mu disini ..">
                                        <small class="text-danger"></small>
                                    </div>
                                    <div class="form-group">
                                        <label class="label-font" for="
                                        exampleFormControlInput1">
                                            Password</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukan password mu disini ..">
                                        <small class="text-danger"></small>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Ingat saya.
                                        </label>
                                    </div>
                                    <p class="terms">Dengan login anda
                                        menyetujui
                                        <i>privasi dan persyaratan ketentuan
                                            hukum kami </i> .
                                        belum punya akun? daftar <a href="{{ route('pengguna.daftar') }}">
                                            disini.</a>
                                    </p>
                                    <button class="btn btn-block font-weight-bold" style="background-color: #4dbf1c;color:white;font-size:18px;">Login
                                        Sekarang!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Modal -->


    <!-- Sweetaler Flashdata -->
    <?php //if ($this->session->flashdata('success-reg')) : ?>
        <script>
            // Swal.fire({
            //     icon: 'success',
            //     title: 'Kamu berhasil daftar!',
            //     text: 'Sekarang kamu boleh login!',
            //     showConfirmButton: false,
            //     timer: 2500
            // })
        </script>
    <?php //endif; ?>


    <?php //if ($this->session->flashdata('login-success')) : ?>
        <script>
            // Swal.fire({
            //     icon: 'success',
            //     title: 'Kamu berhasil daftar!',
            //     text: 'Sekarang login yuk!',
            //     showConfirmButton: false,
            //     timer: 2500
            // })
        </script>
    <?php //endif; ?>


    <?php //if ($this->session->flashdata('success-verify')) : ?>
        <script>
            // Swal.fire({
            //     icon: 'success',
            //     title: 'Email Telah Diverifikasi!',
            //     text: 'Sekarang login yuk!',
            //     showConfirmButton: false,
            //     timer: 2500
            // })
        </script>
    <?php //endif; ?>


    <?php //if ($this->session->flashdata('success-logout')) : ?>
        <script>
            // Swal.fire({
            //     icon: 'success',
            //     title: 'Kamu berhasil logout!',
            //     text: 'Selamat tinggal, Sampai jumpa lagi!',
            //     showConfirmButton: false,
            //     timer: 2500
            // })
        </script>
    <?php //endif; ?>


    <?php //if ($this->session->flashdata('fail-login')) : ?>
        <script>
            // Swal.fire({
            //     icon: 'error',
            //     title: 'Gagal login!',
            //     text: 'Silahkan Periksa Kembali Email dan Password Kamu!',
            //     showConfirmButton: false,
            //     timer: 2500
            // });
        </script>
    <?php //endif; ?>


    <?php //if ($this->session->flashdata('fail-email')) : ?>
        <script>
            // Swal.fire({
            //     icon: 'error',
            //     title: 'Email Belum Diverifikasi!',
            //     text: 'Silahkan Cek Email Kamu Dahulu!',
            //     showConfirmButton: false,
            //     timer: 2500
            // })
        </script>
    <?php //endif; ?>


    <?php //if ($this->session->flashdata('fail-pass')) : ?>
        <script>
            // Swal.fire({
            //     icon: 'error',
            //     title: 'Password Salah!',
            //     text: 'Silahkan Periksa Kembali Password Kamu!',
            //     showConfirmButton: false,
            //     timer: 2500
            // });
        </script>
    <?php //endif; ?>


    <?php //if ($this->session->flashdata('not-login')) : ?>
        <script>
            // Swal.fire({
            //     icon: 'error',
            //     title: 'Harap Login Terlebih Dahulu !',
            //     text: 'Silahkan Login Dahulu !',
            //     showConfirmButton: false,
            //     timer: 2500
            // });
        </script>
    <?php //endif; ?>

    <?php //if ($this->session->flashdata('false-login')) : ?>
        <script>
           // $("#exampleModalCenter").modal("show")
        </script>
    <?php //endif; ?>

    <script src="{{ asset('/js/stellar.js') }}"></script>
    <script src="{{ asset('/vendors/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ asset('/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('/vendors/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/vendors/popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('/vendors/counter-up/jquery.counterup.js') }}"></script>
    <script src="{{ asset('/js/mail-script.js') }}"></script>
    <script src="{{ asset('/js/theme.js') }}"></script>
    <script>
        var animateButton = function(e) {
            e.preventDefault;
            e.target.classList.remove('animate');
            e.target.classList.add('animate');
            setTimeout(function() {
                e.target.classList.remove('animate');
            }, 700);
        };

        var bubblyButtons = document.getElementsByClassName("bubbly-button");

        for (var i = 0; i < bubblyButtons.length; i++) {
            bubblyButtons[i].addEventListener('click', animateButton, false);
        }
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>