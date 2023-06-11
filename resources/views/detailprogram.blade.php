@extends('layout.main')
@section('babayo')
    <main id="main">

        <!-- ======= Hero Section ======= -->
        <section id="hayo" class="d-flex align-items-center justify-content-center">
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
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h1>{{ $program->nama }}</h1>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>Program Donasi : {{ $program->nama }}</li>
                    </ol>
                </div>
<<<<<<< HEAD
=======
                {{-- <div class="portfolio-description">
                <h2>Deskripsi program donasi</h2>
                <p>
                    {{ $program->deskripsi }}
                </p>
                </div> --}}
            </div>
>>>>>>> 8d97dbf3262019591a43c06a39d4fcdc9ea135ea

            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $program->gambar) }}" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Detail Program Donasi</h3>
                            <ul>
                                <li><strong>Kategori Program</strong>: {{ $program->kategori->nama }}</li>
                                <li><strong>Penanggung Jawab Program</strong>: {{ $program->user->name }}</li>
                                <li><strong>Dana Terkumpul</strong>: Rp {{ number_format($program->danaskrg, 2, ',', '.') }}
                                </li>
                                <li><strong>Target Dana</strong>: Rp {{ number_format($program->targetdana, 2, ',', '.') }}
                                </li>
                                <li><strong>Berakhir pada</strong>:
                                    {{ \Carbon\Carbon::parse($program->deadline)->translatedFormat('l, d F Y') }}</li>
                            </ul>
                        </div>
                    </div>

                </div>
<<<<<<< HEAD

            </div>
        </section>
        <!-- End Portfolio Details Section -->
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        {{-- <img src="assets/img/donation.jfif" class="img-fluid" alt=""> --}}
                    </div>
                    <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-top: 3%"
                        data-aos="fade-right" data-aos-delay="100">
                        <h3>#Bantuan {{ $program->kategori->nama }} : Donasi untuk {{ $program->nama }}</h3>
                        <p class="small mb-0"><i class="far fa-star fa-lg"></i> <span class="mx-2">|</span> Dibuat oleh
                            <strong>{{ $program->user->name }}</strong> pada {{ $program->created_at->format('d M Y') }}
                        </p>
                        <div style="margin-top: 40px">
                            <h5>Rp {{ number_format($program->danaskrg, 2, ',', '.') }}</h5>
                        </div>
                        <div style="margin-top: 10px">
                            <h6>Terkumpul dari Rp {{ number_format($program->targetdana, 2, ',', '.') }}</h6>
                        </div>
                        <div class="progress" style="margin-top: 20px">
                            <div class="progress-bar progress-bar-striped" title="Rp{{ $program->danaskrg }}"
                                style="width: {{ ($program->danaskrg / $program->targetdana) * 100 }}%">
                                Rp{{ number_format($program->danaskrg, '2', ',', '.') }}</div>
                        </div>
                        <p class="fst" style="margin-top: 50px">
                            {{ $program->deskripsi }}
                        </p>
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                            data-aos-delay="100">
                        </div>
                        <div class="parent d-flex justify-content-center" style="margin-top: 60px">
                            <a href="/payment"> <button type="button" class="btn btn-light btn-lg text-white"
                                    style="background-color: #4B6587">Donasi Sekarang</button></a>
                        </div>
                        {{-- <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-top:40px" data-aos="fade-right" data-aos-delay="100">
=======
                <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-top: 3%" data-aos="fade-right" data-aos-delay="100">
                <h3>#Bantuan {{ $program->kategori->nama }} : {{ $program->nama }}</h3>
                <p class="small mb-0"><i class="far fa-star fa-lg"></i> <span class="mx-2">|</span> Dibuat oleh
                    <strong>{{ $program->user->name }}</strong> pada {{ $program->created_at->format('d M Y') }}</p>
                <div style="margin-top: 40px"> <h4>Rp {{ number_format($program->danaskrg, 2, ',','.') }}</h4> </div>
                <div style="margin-top: 10px"> <h5>Terkumpul dari Rp {{ number_format($program->targetdana, 2, ',','.') }}</h5> </div>
                <div class="progress" style="margin-top: 20px">
                    <div class="progress-bar progress-bar-striped" title="Rp{{ $program->danaskrg }}" style="width: {{ $program->danaskrg/$program->targetdana*100 }}%">Rp{{ number_format($program->danaskrg,'2',',','.') }}</div>
                </div>
                    <div class="fst" style="margin-top: 50px"><h5>
                        {{ $program->deskripsi }}</h5>
                    </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                </div>
                <div class="parent d-flex justify-content-center" style="margin-top: 60px">
                    <form method='POST'>
                    <a href="/payment/{{ $program->id }}"> <button type="button" class="btn btn-light btn-lg text-white" style="background-color: #4B6587">Donasi Sekarang</button></a>
                    </form>
                </div>
                {{-- <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-top:40px" data-aos="fade-right" data-aos-delay="100">
>>>>>>> 8d97dbf3262019591a43c06a39d4fcdc9ea135ea
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
                        <div class="swiper-slide"><img src="asset../../s/img/clients/client-1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="../../assets/img/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="../../assets/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="../../assets/img/clients/client-4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="../../assets/img/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="../../assets/img/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="../../assets/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="../../assets/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                    </div>
                    <div class="swiper-pagination">sknskn</div>
                </div>

            </div>
        </section>
        <!-- End Clients Section -->

    </main>
    <!-- End #main -->
@endsection
