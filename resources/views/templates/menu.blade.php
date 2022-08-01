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
                         <li class="nav-item" id="navtentang"><a class="nav-link" href="{{ route('tentang') }}">Tentang</a>
                         <li class="nav-item" id="nav"><a class="nav-link" href="{{ route('siswa.daftar') }}">Daftar</a></li>
                         <li class="nav-item dropdown">
                             <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">Masuk
                             </a>
                             <div class="dropdown-menu dropdown-menu-right">
                                 <a href="#" class="dropdown-item has-icon " data-toggle="modal" data-target="#loginsiswa">
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