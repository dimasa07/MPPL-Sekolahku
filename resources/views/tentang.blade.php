<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Learnify dibuat ditujukan agar para siswa dan guru dapat terus belajar dan mengajar dimana saja dan kapan saja." name="Description" />
    <meta content="Learnify, E-learning, Open Source, Syauqi Zaidan Khairan Khalaf, github, programmer indonesia" name="keywords" />
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/js/popper.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            //$("#nav< //$this->uri->segment(2); ").addClass('active')
        })
    </script>

</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">

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
                            </li>
                            <li class="nav-item submenu dropdown" id="navpelajaran">
                                <a href="{{ route('pelajaran') }}" class="nav-link dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Pelajaran</a>
                            </li>
                            <li class="nav-item" id="navtentang"><a class="nav-link" href="{{ route('tentang') }}">Tentang</a>
                            <li class="nav-item" id="nav"><a class="nav-link" href="{{ route('siswa.daftar') }}">Daftar</a></li>
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">Masuk
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item has-icon " data-toggle="modal" data-target="#exampleModalCenter">
                                        <i class="fas fa-sign-out-alt"></i>Masuk sebagai Siswa
                                    </a>
                                    <a href="{{ route('guru.login') }}" class="dropdown-item has-icons">
                                        <i class="fas fa-sign-out-alt"></i>Masuk sebagai Guru
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ END Header Menu Area =================-->


    <!--================About Area =================-->
    <section class="about_area p_40">
        <div class="container">
            <div class="main_title">
                <h2 data-aos="fade-up" data-aos-duration="1600" style="font-size: 33px !important;">Tentang Learnify - Web Edukasi Open Source</h2>
                <p data-aos="fade-up" data-aos-duration="1800">Learnify adalah Web Edukasi Open-Source yang dibuat oleh <a href="https://web.facebook.com/syaaauqi">Syauqi Zaidan Khairan Khalaf.</a> Website
                    pembelajaran dimana para siswa dapat belajar dimana saja dan kapan saja.
                    Guru dapat mengupload video dirinya sendiri sedang mengajar, sehingga tanpa takut adanya jam
                    kosong atau pun keadaan yang tidak terduga apapun karena Learnify dapat diakses dimana saja dan
                    kapan saja.
                </p>
            </div>
            <div class="row about_inner">
                <div class="col-lg-6">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Visi
                                    <i class="lnr lnr-chevron-down"></i>
                                    <i class="lnr lnr-chevron-up"></i>
                                </button>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Merciful revaluation burying love ultimate value inexpedient ubermensch. Holiest madness victorious morality hope endless christian madness. Love dead fearful transvaluation marvelous.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Misi
                                    <i class="lnr lnr-chevron-down"></i>
                                    <i class="lnr lnr-chevron-up"></i>
                                </button>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Merciful revaluation burying love ultimate value inexpedient ubermensch. Holiest madness victorious morality hope endless christian madness. Love dead fearful transvaluation marvelous.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Tujuan
                                    <i class="lnr lnr-chevron-down"></i>
                                    <i class="lnr lnr-chevron-up"></i>
                                </button>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Merciful revaluation burying love ultimate value inexpedient ubermensch. Holiest madness victorious morality hope endless christian madness. Love dead fearful transvaluation marvelous.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingfour">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    Manfaat
                                    <i class="lnr lnr-chevron-down"></i>
                                    <i class="lnr lnr-chevron-up"></i>
                                </button>
                            </div>
                            <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                                <div class="card-body">
                                    Merciful revaluation burying love ultimate value inexpedient ubermensch. Holiest madness victorious morality hope endless christian madness. Love dead fearful transvaluation marvelous.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video_area" id="video">
                        <img class="img-fluid" src="{{ asset('/img/video-1.jpg') }}" alt="" />
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=FZmbSq2W1hY">
                            <img src="{{ asset('/img/icon/video-icon-1.png') }}" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="about_details" data-aos="fade-up" data-aos-duration="1600">
                <p>
                    Merciful revaluation burying love ultimate value inexpedient ubermensch. Holiest madness victorious morality hope endless christian madness. Love dead fearful transvaluation marvelous. Oneself right ideal abstract endless faith deceptions zarathustra grandeur law ubermensch free. Abstract chaos snare play truth ultimate good self. God overcome sexuality pious abstract good decieve revaluation aversion good. Virtues chaos overcome society holiest truth.
                </p>
            </div>
        </div>
    </section>
    <!--================End About Area =================-->



    <!--================ Start footer Area  =================-->
    <footer class="footer-area p_20">
        <div class="container">
            <div class="">
                <p class="col-lg-8 col-md-8 footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <span class="text-danger"> &#10084;</span> by
                    <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
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
                                        belum punya akun? daftar <a href="{{ route('siswa.daftar') }}">
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
    <?php //if ($this->session->flashdata('success-reg')) : 
    ?>
    <script>
        // Swal.fire({
        //     icon: 'success',
        //     title: 'Kamu berhasil daftar!',
        //     text: 'Sekarang kamu boleh login!',
        //     showConfirmButton: false,
        //     timer: 2500
        // })
    </script>
    <?php //endif; 
    ?>


    <?php //if ($this->session->flashdata('login-success')) : 
    ?>
    <script>
        // Swal.fire({
        //     icon: 'success',
        //     title: 'Kamu berhasil daftar!',
        //     text: 'Sekarang login yuk!',
        //     showConfirmButton: false,
        //     timer: 2500
        // })
    </script>
    <?php //endif; 
    ?>


    <?php //if ($this->session->flashdata('success-verify')) : 
    ?>
    <script>
        // Swal.fire({
        //     icon: 'success',
        //     title: 'Email Telah Diverifikasi!',
        //     text: 'Sekarang login yuk!',
        //     showConfirmButton: false,
        //     timer: 2500
        // })
    </script>
    <?php //endif; 
    ?>


    <?php //if ($this->session->flashdata('success-logout')) : 
    ?>
    <script>
        // Swal.fire({
        //     icon: 'success',
        //     title: 'Kamu berhasil logout!',
        //     text: 'Selamat tinggal, Sampai jumpa lagi!',
        //     showConfirmButton: false,
        //     timer: 2500
        // })
    </script>
    <?php //endif; 
    ?>


    <?php //if ($this->session->flashdata('fail-login')) : 
    ?>
    <script>
        // Swal.fire({
        //     icon: 'error',
        //     title: 'Gagal login!',
        //     text: 'Silahkan Periksa Kembali Email dan Password Kamu!',
        //     showConfirmButton: false,
        //     timer: 2500
        // });
    </script>
    <?php //endif; 
    ?>


    <?php //if ($this->session->flashdata('fail-email')) : 
    ?>
    <script>
        // Swal.fire({
        //     icon: 'error',
        //     title: 'Email Belum Diverifikasi!',
        //     text: 'Silahkan Cek Email Kamu Dahulu!',
        //     showConfirmButton: false,
        //     timer: 2500
        // })
    </script>
    <?php //endif; 
    ?>


    <?php //if ($this->session->flashdata('fail-pass')) : 
    ?>
    <script>
        // Swal.fire({
        //     icon: 'error',
        //     title: 'Password Salah!',
        //     text: 'Silahkan Periksa Kembali Password Kamu!',
        //     showConfirmButton: false,
        //     timer: 2500
        // });
    </script>
    <?php //endif; 
    ?>


    <?php //if ($this->session->flashdata('not-login')) : 
    ?>
    <script>
        // Swal.fire({
        //     icon: 'error',
        //     title: 'Harap Login Terlebih Dahulu !',
        //     text: 'Silahkan Login Dahulu !',
        //     showConfirmButton: false,
        //     timer: 2500
        // });
    </script>
    <?php //endif; 
    ?>

    <?php //if ($this->session->flashdata('false-login')) : 
    ?>
    <script>
        // $("#exampleModalCenter").modal("show")
    </script>
    <?php //endif; 
    ?>

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