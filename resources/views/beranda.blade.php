<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('/img/favicon.png') }}" type="image/png">
    <title>Sekolahku |  OnSchool</title>
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

    @include("templates.menu")

    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="banner_content text-center">
                    <h3 data-aos="fade-up" data-aos-duration="1600">Belajar Dimana Saja & Kapan Saja <br /> Mudah Dengan OnSchool</h3>
                    <p data-aos="fade-up" data-aos-duration="1900">Dengan OnSchool kemudahan kegiatan belajar mengajar dapat terpenuhi. Para guru dan siswa dapat
                        belajar meski banyak halangan atau rintangan. Nikmati Pembelajaran terstruktur dan efektif menggunakan OnSchool serta kemudahan belajar dengan menggunakan aplikasi kami. </p>
                    <a data-aos="fade-up" data-aos-duration="2000" class="main_btn" href="{{ route('siswa.daftar') }}">Bergabung Sekarang <span class="lnr lnr-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- ================End Home Banner Area ================= -->


    <!--================Courses Area =================-->
    <section class="courses_area p_40">
        <div class="container">
            <div class="main_title">
                <h2 data-aos="fade-up" data-aos-duration="1600">Pelajaran Yang Tersedia di OnSchool</h2>

            </div>
            <div class="row courses_inner">
                <div class="col-lg-9">
                    <div class="grid_inner">
                        <div class="grid_item wd55">
                            <div class="courses_item" data-aos="fade-right" data-aos-duration="1800">
                                <img src="{{ asset('/img/courses/course-1.jpg') }}" alt="">
                                <div class="hover_text">
                                    <a class="cat" href="#">Gratis</a>
                                    <a href="javaScript:void(0);">
                                        <h4>Kelas Matematika Gratis</h4>
                                    </a>
                                    <ul class="list">
                                        <li><a href="#"><i class="lnr lnr-users"></i>54</a></li>
                                        <li><a href="#"><i class="lnr lnr-bubble"></i> 0</a></li>
                                        <li><a href="#"><i class="lnr lnr-user"></i>Guru Matematika SMKN 1 Ciamis</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="grid_item wd44">
                            <div class="courses_item" data-aos="fade-down" data-aos-duration="1800">
                                <img src="{{ asset('/img/courses/course-2.jpg') }}" alt="">
                                <div class="hover_text">
                                    <a class="cat" href="#">Gratis</a>
                                    <a href="javaScript:void(0);">
                                        <h4>Kelas IPA Gratis</h4>
                                    </a>
                                    <ul class="list">
                                        <li><a href="#"><i class="lnr lnr-users"></i> 34</a></li>
                                        <li><a href="#"><i class="lnr lnr-bubble"></i> 0</a></li>
                                        <li><a href="#"><i class="lnr lnr-user"></i> Guru IPA SMKN 1 Ciamis</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="grid_item wd44">
                            <div class="courses_item" data-aos="fade-right" data-aos-duration="1800">
                                <img src="{{ asset('/img/courses/course-4.jpg') }}" alt="">
                                <div class="hover_text">
                                    <a class="cat" href="#">Gratis</a>
                                    <a href="javaScript:void(0);">
                                        <h4>Kelas Bahasa Inggris Gratis</h4>
                                    </a>
                                    <ul class="list">
                                        <li><a href="#"><i class="lnr lnr-users"></i> 63</a></li>
                                        <li><a href="#"><i class="lnr lnr-bubble"></i> 0</a></li>
                                        <li><a href="#"><i class="lnr lnr-user"></i> Guru English SMKN 1 Ciamis</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="grid_item wd55">
                            <div class="courses_item" data-aos="fade-up" data-aos-duration="1800">
                                <img src="{{ asset('/img/courses/course-5.jpg') }}" alt="">
                                <div class="hover_text">
                                    <a class="cat" href="#">Gratis</a>
                                    <a href="javaScript:void(0);">
                                        <h4>Kelas Bahasa Indonesia Gratis</h4>
                                    </a>
                                    <ul class="list">
                                        <li><a href="#"><i class="lnr lnr-users"></i> 24</a></li>
                                        <li><a href="#"><i class="lnr lnr-bubble"></i> 0</a></li>
                                        <li><a href="#"><i class="lnr lnr-user"></i> Guru Indonesia SMKN 1 Ciamis</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="course_item" data-aos="fade-left" data-aos-duration="1800">
                        <img src="{{ asset('/img/courses/course-3.jpg') }}" alt="">
                        <div class="hover_text">
                            <a class="cat" href="#">Gratis</a>
                            <a href="javaScript:void(0);">
                                <h4>Kelas Pendidikan Agama Islam Gratis</h4>
                            </a>
                            <ul class="list">
                                <li><a href="#"><i class="lnr lnr-users"></i> 35</a></li>
                                <li><a href="#"><i class="lnr lnr-bubble"></i> 0</a></li>
                                <li><a href="#"><i class="lnr lnr-user"></i> Guru Agama SMKN 1 Ciamis</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Courses Area =================-->


    <!--================Impress Area =================-->
    <section class="impress_area p_120">
        <div class="container">
            <div class="impress_inner text-center">
                <h2 data-aos="fade-up" data-aos-duration="1800">LOGIN SEBAGAI GURU DAN UPLOAD MATERI SEKARANG</h2>

                <a data-aos="fade-up" data-aos-duration="2200" class="main_btn" href="{{ route('guru.login') }}">Login Sebagai Guru <span class="lnr lnr-arrow-right text-black"></span></a>
            </div>
        </div>
    </section>
    <!--================End Impress Area =================-->


    @include("templates.footer")