

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DoNation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  {{-- CSS form --}}
  <link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />
  <link type="text/css" rel="stylesheet" href="../../form/css/style.css" />

  <style>
    input[type=file]::file-selector-button {
        margin-top: -1px;
        border: none;
        background: #91775B;
        padding: 10px 11px 10px 11px;
        margin-left: -15px;
        border-radius: 10px;/
        color: #ffffff;
        cursor: pointer;
        transition: background .2s ease-in-out;
    }
    input[type=file]::file-selector-button:hover {
    background: #0d45a5;
    }
</style>


  <!-- =======================================================
  * Template Name: Gp - v4.10.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
        <header id="header" class="fixed-top ">
            <div class="container d-flex align-items-center justify-content-lg-between">

                <h1 class="logo me-auto me-lg-0"><a href="/">DoNation<span>.</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/slider2.jpg" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto active" href="/#">Beranda</a></li>
                        <li><a class="nav-link scrollto" href="/#berita">Berita</a></li>
                        <li><a class="nav-link scrollto" href="/#donasi">Program</a></li>

                        @auth
                            <li class="dropdown"><a href="#"><span>Riwayat</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="/riwayat">Donasi</a></li>
                                    <li><a href="/riwayat">Penggalangan Dana</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>{{ auth()->user()->username }}</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    @can('admin')
                                        <li><a href="/dashboard">Administrator</a></li>
                                        <hr>
                                    @endcan
                                    <li><a href="/profil">Profil</a></li>
                                    <li><a href="/ubahpassword">Ubah Password</a></li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button class="dropdown-item" type="submit">Keluar</button>
                                    </form>
                                </ul>
                            </li>
                        @else
                            {{-- <li><a class="nav-link scrollto" href="#contact">Kontak</a></li> --}}
                            <li class="dropdown"><a href="#"><span>User</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                <li><a href="/login">Masuk</a></li>
                                <li><a href="/register">Daftar</a></li>
                                </ul>
                            </li>
                        @endauth
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- .navbar -->

                {{-- <a href="#about" class="get-started-btn scrollto">Get Started</a> --}}

            </div>
        </header>
    <!-- End Header -->

        @yield('babayo')

    <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <div class="copyright">
                    <strong>DoNation.</strong>
                </div>
            </div>
        </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
    var swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
    mousewheel: {
        invert: false,
    },
    // autoHeight: true,
    pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
    }
    });
    </script>
</body>

</html>

