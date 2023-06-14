@extends('layout.admin')
@section('container')
<h1 class="display-1 text-center mb-5">All Program DoNation</h1>
@if (session()->has('success'))
    <div class="row justify-content-center">
        <div class="alert alert-danger col-lg-6" role="alert">
            {{ session('success') }}
        </div>
    </div>
@endif

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Semua</li>
                @foreach ($kategori as $kat)
                <li data-filter=".{{ $kat->slug }}">{{ $kat->nama }}</li>
                @endforeach
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
                            <div class="portfolio-links">
                            {{-- <a href="{{ asset('storage/'.$prog->gambar) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="View Photos"><i class="bx bx-plus"></i></a> --}}
                            <a href="" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>
<!-- End Portfolio Section -->

    <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../../assets/js/main.js"></script>
@endsection
