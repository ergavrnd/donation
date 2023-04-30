<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DoNation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/detailprogram.css" rel="stylesheet">

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

      <h1 class="logo me-auto me-lg-0"><a href="">DoNation<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/slider2.jpg" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#berita">Berita</a></li>
          <li class="dropdown"><a href="#"><span>Riwayat</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="/login">Program</a></li>
            <li><a href="/register">Donasi</a></li>
            </ul>
        </li>
          @auth
            <li class="dropdown"><a href="#"><span>{{ auth()->user()->username }}</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a href="/profil">Profil</a></li>
                <li><a href="/ubahpassword">Ubah Password</a></li>
                <form action="/logout" method="post">
                @csrf
                    <button class="dropdown-item" type="submit">Keluar</button>
                </form>

                </ul>
            </li>
          @else
            <li class="dropdown"><a href="#"><span>User</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a href="/login">Masuk</a></li>
                <li><a href="/register">Daftar</a></li>
                </ul>
            </li>
          @endauth

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      {{-- <a href="#about" class="get-started-btn scrollto">Get Started</a> --}}

    </div>
  </header>
  <!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      {{-- <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Hidup tidak selalu tentang 'memiliki', tapi juga 'berbagi'<span>.</span></h1>
        </div>
      </div> --}}

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        {{-- <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="">Lorem Ipsum</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href="">Dolor Sitema</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="">Sedare Perspiciatis</a></h3>
          </div>
        </div> --}}

      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                {{-- <img src="assets/img/donation.jfif" class="img-fluid" alt=""> --}}
                </div>
                <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-top: 3%" data-aos="fade-right" data-aos-delay="100">
                <h3>#BantuanBencana : Donasi untuk Bantu Korban Banjir</h3>
                <p class="small mb-0"><i class="far fa-star fa-lg"></i> <span class="mx-2">|</span> Dibuat oleh
                    <strong>Yayasan Al Ma'ruf</strong> pada 11 April , 2021</p>
                <div style="margin-top: 40px"> <h5>Rp46.544.322</h5> </div>
                <div style="margin-top: 10px"> <h6>Terkumpul dari Rp50.000.000</h6> </div>
                <div class="progress" style="margin-top: 20px">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                    <p class="fst-" style="margin-top: 50px">
                        Jelang Imlek, banjir pun melanda daerah Pati, Demak, Kudus, Brebes, hingga Kebumen. Banjir paling parah terjadi di Kecamatan Sayung, Demak, Jawa Tengah. Ada sekitar 31.099 jiwa yang menjadi korban banjir di kawasan Sayung.

                        Nah, bagi kamu yang peduli terhadap musibah tersebut, bisa ikut membantu dengan membuatkan link donasi. Jika donasi terkumpul, kamu dapat memberikan langsung kepada korban banjir di daerah terdekat.
                    </p>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                </div>
                <div class="parent" style="margin-top: 60px">
                <a href="/payment"> <button type="button" class="btn btn-primary btn-lg">Donasi Sekarang</button></a>
                </div>
                {{-- <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-top:40px" data-aos="fade-right" data-aos-delay="100">
                    <h6><b>Penggalang Dana :</b></h6>
                </div>
                <div style="margin-top: 10px"> <h6>Yayasan Al Ma'ruf</h6> </div> --}}

            </div>

        </div>
    </section>
    <!-- End About Section -->


    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-in">

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Clients Section -->






  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
       <strong>DoNation.</strong>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
