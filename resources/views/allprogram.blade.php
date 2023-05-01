@extends('layout.main')
@section('babayo')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
            <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                <h1>Hidup tidak selalu tentang 'memiliki', tapi juga 'berbagi'<span>.</span></h1>
                </div>
            </div>
            <br>
            </div>
    </section>
    <!-- End Hero -->

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Donasi</h2>
                <p>Ulurkan tanganmu dan bantulah mereka</p>
            </div>

            <div class="button-create d-flex justify-content-center mb-5">
                <a class="btn btn-light btn-lg text-white" style="background-color: #4B6587" href="">Buat Progam Donasi</a>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Semua</li>
                    @foreach ($kategori as $kat)
                    <li data-filter=".{{ $kat->slug }}">{{ $kat->nama }}</li>
                    @endforeach
                    {{-- <li data-filter=".filter-app">Kemanusiaan</li>
                    <li data-filter=".filter-card">Pendidikan</li>
                    <li data-filter=".filter-web">Infrastruktur</li> --}}
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @foreach ($program as $prog)
                    <div class="col-lg-4 col-md-6 portfolio-item {{ $prog->kategori->slug }}">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('storage/'.$prog->gambar) }}" class="img-fluid" style="height: 312px" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $prog->nama }}</h4>
                                <p>{{ $prog->deskripsi }}</p>
                                <div class="portfolio-links">
                                <a href="{{ asset('storage/'.$prog->gambar) }}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-photo-album"></i></a>
                                <a href="/programdonasi/{{ $prog->slug }}" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients" style="margin: 55px 0 0 0">
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

@endsection
