@extends('layout.admin')
@section('container')
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            @if (session()->has('success'))
                <div class="row justify-content-center">
                    <div class="alert alert-success col-lg-8" role="alert">
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            @if (session()->has('batalkan'))
                <div class="row justify-content-center">
                    <div class="alert alert-warning col-lg-8" role="alert">
                        {{ session('batalkan') }}
                    </div>
                </div>
            @endif
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img class="img-fluid" style="height: 450px"
                                    src="{{ asset('storage/' . $program->gambar) }}" alt="">
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
                        <div class="row">
                            <div class="col-lg-6">
                                <form action="/dashboard-verifikasi" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $program->id }}">
                                    <button type="submit" class="btn text-white"
                                        style="background-color: #4B6587">Verifikasi Program</button>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <!-- Button trigger modal -->
                                <button type="button" style="background-color: #671912" class="btn text-white"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Batalkan Program
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color: black">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Batalkan Program</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close" style="background-color: white"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/dashboard-batalkan" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $program->id }}">
                                                    <span>Masukkan alasan anda membatalkan program ini!</span>
                                                    <input class="form-control" style="background-color: #8a8d91"
                                                        type="text" name="pesanbatal" required>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

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
                <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-top: 3%" data-aos="fade-right"
                    data-aos-delay="100">
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
            <h6><b>Penggalang Dana :</b></h6>
        </div>
        <div style="margin-top: 10px"> <h6>Yayasan Al Ma'ruf</h6> </div> --}}

                </div>

            </div>
    </section>
    <!-- End About Section -->
@endsection
