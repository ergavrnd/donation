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
  <link href="assets/css/style.css" rel="stylesheet">

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

            @auth
                <li class="dropdown"><a href="#"><span>Riwayat</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                    <li><a href="/login">Program</a></li>
                    <li><a href="/register">Donasi</a></li>
                    </ul>
                </li>
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
                <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
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
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Hidup tidak selalu tentang 'memiliki', tapi juga 'berbagi'<span>.</span></h1>
        </div>
      </div>
      <br>
        @auth

        <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
            <div class="col-lg-3 col-md-12">
              <div class="icon-box">
                <i class="ri-hand-heart-line"></i>
                <h3><a href="">Donasi</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-12">
              <div class="icon-box">
                <i class="ri-home-heart-line"></i>
                <h3><a href="">Program</a></h3>
              </div>
            </div>
          </div>

        @endauth
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/donation.jfif" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Tentang Kami</h3>
            <p class="fst-">
                DoNation merupakan website yang memfasilitasi serta menyalurkan donasi melalui 3 kategori program yang ada yaitu Kemanusiaan, Pendidikan, dan Infrastruktur
            </p>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <h3>Visi</h3>
            </div>
                <p class="fst-">
                    “Menjadi website donasi yang aktif membantu meringankan penderitaan sesama yang membutuhkan, dalam bidang Kemanusiaan, Pendidikan, dan Infrastruktur untuk mencapai dan mewujudkan kualitas hidup yang lebih baik  ”
                </p>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <h3>Misi</h3>
            </div>
            <ul>
                <li><i class="ri-check-double-line"></i> Membangun kesadaran masyarakat Indonesia untuk peduli kepada sesama</li>
                <li><i class="ri-check-double-line"></i> Menciptakan sarana donasi yang aman dan terpercaya </li>
                <li><i class="ri-check-double-line"></i> Meringankan beban masyarakat Indonesia yang mengalami musibah </li>
              </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

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
    </section><!-- End Clients Section -->



    <!-- ======= Services Section ======= -->
    <section id="berita" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Berita</p>
        </div>

        <div class="slider">
            <input type="radio" name="toggle" id="btn-1" checked>
            <input type="radio" name="toggle" id="btn-2">
            <input type="radio" name="toggle" id="btn-3">

            <div class="slider-controls">
              <label for="btn-1"></label>
              <label for="btn-2"></label>
              <label for="btn-3"></label>
            </div>

            <ul class="slides">
              <li class="slide">
                <div class="slide-content">
                  <h2 class="slide-title">Wilayah Sarongge hingga Ciherang Belum Terjamah Bantuan Gempa Cianjur</h2>
                  <br>
                  <p class="slide-text">
                    Warga Cianjur, Jawa Barat, Alfa mengatakan bahwa wilayah utara Kota Cianjur hingga kini masih luput dari perhatian pemerintah pasca bencana gempa yang terjadi pada Senin (21/11).

                    Alfa menyebut bantuan masih terfokus di wilayah Cianjur kota, sementara wilayah bagian utara seperti di Ciherang hingga Sarongge masih kekurangan bantuan logistik, obat-obatan, dan makanan.
                  </p>
                  <br>
                  <a href="#" class="slide-link">Selengkapnya</a>
                </div>
                <p class="slide-image">
                  <img src="assets/img/gempa.jpeg" alt="stuff" width="400" height="320">
                </p>
              </li>
              <li class="slide">
                <div class="slide-content">
                  <h2 class="slide-title">Wak Abu, Lansia Sebatang Kara Luput dari Perhatian Pemerintah</h2>
                  <br>
                  <br>

                  <p class="slide-text">Seorang lansia di Dusun Tani Jaya, Gampong Birem Bayeun, Kecamatan Birem Bayeun, Aceh Timur, Abu Bakar (70) luput dari perhatian Pemerintah.

                    Amatan Wartawan lansia di Birem Bayeun yang sering di sapa wak Abu Bakar itu tinggal di rumah miliknya di sebuah kebun sawit.
                    </p>
                    <br>
                    <br>
                  <a href="#" class="slide-link">Selengkapnya</a>
                </div>
                <p class="slide-image">
                  <img src="assets/img/abu.jpg"alt="stuff" width="320" height="240">
                </p>
              </li>
              <li class="slide">
                <div class="slide-content">
                  <h2 class="slide-title">Tiada Angin, Hujan, dan Retakan, Atap Sekolah Tiba-Tiba Ambruk</h2>
                  <br>
                  <p class="slide-text">Peristiwa atap sekolah ambruk kembali terjadi. Atap tiga ruangan kelas di sekolah dasar negeri (SDN) Gugut 1, Kabupaten Jember, Jawa Timur, tiba-tiba ambruk sebelum kegiatan belajar dan mengajar dimulai.

                    Ketika itu, penjaga sekolah membuka pintu ruang kelas 4. Tiba-tiba, atap ruang kelas ambruk hampir bersamaan dengan atap ruangan kelas 5 dan kelas 6.</p>
                    <br>
                  <a href="#" class="slide-link">Selengkapnya</a>
                </div>
                <p class="slide-image">
                  <img src="assets/img/sd.jpg" alt="stuff" width="320" height="240">
                </p>
              </li>
            </ul>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Donasi</h2>
          <p>Ulurkan tanganmu dan bantulah mereka</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-app">Kemanusiaan</li>
              <li data-filter=".filter-card">Pendidikan</li>
              <li data-filter=".filter-web">Infrastruktur</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/badut.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/badut.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/wudhu.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/wudhu.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/rumah.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/rumah.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/jalan1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/jalan1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/banjir.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/banjir.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/sekolah.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/sekolah.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/kebakaran.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/kebakaran.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/sakit.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/sakit.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/lansia.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/lansia.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/sekolah1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/sekolah1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/sekolah3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/sekolah3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/sekolah4.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/sekolah4.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/sekolah5.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/sekolah5.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/sekolah2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/sekolah2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/jembatan.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/jembatan.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Jumlah Donatur</h3>

              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-house-heart"></i>
                    <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Semua Program</strong></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-person-heart"></i>
                    <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Kemanusiaan</strong></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-book"></i>
                    <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Pendidikan</strong></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-building"></i>
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Infrastruktur</strong></p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/mas1.jpg" class="testimonial-img" alt="">
                <h3>Gandhi Bagaskara</h3>
                <h4>Surabaya</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Semoga para korban mendapat keberkahan dibalik musibah yang terjadi dan semoga donasi dapat tersampaikan dengan baik
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/mbak1.jpg" class="testimonial-img" alt="">
                <h3>Sophianne Azzahra</h3>
                <h4>Bandung</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Semoga segera mendapat kesembuhan seperti sedia kala, Aamiin..
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/mas2.jpg" class="testimonial-img" alt="">
                <h3>Megantara Kusuma</h3>
                <h4>Malang</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Semoga anak-anak dapat bersekolah dengan nyaman setelah ini
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/mbak2.jpg" class="testimonial-img" alt="">
                <h3>Adelia Fatmawati</h3>
                <h4>Jogjakarta</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Semoga tersalurkan dengan baik
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/mas3.jpg" class="testimonial-img" alt="">
                <h3>Adam Nugraha</h3>
                <h4>Medan</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Semoga Allah SWT selalu melindungi kita semua, Aamiin..
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>


      </div>
    </section>
    <!-- End Testimonials Section -->

    @auth
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Donatur</h2>
                <p>Donatur Terbaik</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                        <img src="assets/img/team/nazar.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                        <h4>Rizky Nazar</h4>
                        <span>Surabaya</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                        <img src="assets/img/team/pevita.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                        <h4>Pevita Pearce</h4>
                        <span>Padang</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                        <img src="assets/img/team/refal.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                        <h4>Refal Hady</h4>
                        <span>Bandung</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="assets/img/team/maudy.jpeg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                            <h4>Maudy Ayunda</h4>
                            <span>Jakarta</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Team Section -->
    @endauth

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
