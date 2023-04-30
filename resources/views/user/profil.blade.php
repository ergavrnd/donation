@extends('layout.main')
@section('babayo')

<main id="main">
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

    <section class="inner-page">
        <div class="container">
            <div class="page-content page-container" id="page-content" style="margin-top: 36px">
                <div class="padding">
                    <div class="row container d-flex justify-content-center">
                        <div class="col-xl-6 col-md-12" style="width: 1550px;">
                            <div class="card user-card-full">
                                <div class="row m-l-0 m-r-0" style="height: 480px;">
                                    <div class="col-sm-4 bg-c-lite-green user-profile" >
                                        <div class="card-block text-center text-white">
                                            <div class="m-b-25">
                                                <img src="assets/img/ali.jpg" class="img-radius rounded-circle" style="height: 200px; width: 200px" alt="User-Profile-Image">
                                            </div>
                                            <h6 class="f-w-600" style="font-size: 20px">{{ auth()->user()->name }}</h6>
                                            <p style="font-size: 16px">
                                                @if(auth()->user()->gender == 1)
                                                    Pria
                                                @elseif (auth()->user()->gender == 1)
                                                    Wanita
                                                @else
                                                    -
                                                @endif
                                            </p>
                                            <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-sm-8">
                                        <div class="card-block">
                                            <h1 class="m-b-20 p-b-5 f-w-600" style="font-size: 28px">Profil Donatur</h1>
                                            <hr class="mb-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600" style="font-size: 25px">Email</p>
                                                    <h6 class="text-muted f-w-400" style="font-size: 20px">{{ auth()->user()->email }}</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600" style="font-size: 25px">Username</p>
                                                    <h6 class="text-muted f-w-400" style="font-size: 20px">{{ auth()->user()->username }}</h6>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600" style="font-size: 25px">Role User</p>
                                                    <h6 class="text-muted f-w-400"style="font-size: 20px">
                                                        @if (auth()->user()->roleid == 1)
                                                            Admin
                                                        @else
                                                            Wong biasa
                                                        @endif
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600" style="font-size: 25px">Nomor telepon</p>
                                                    <h6 class="text-muted f-w-400" style="font-size: 20px">
                                                        @if (auth()->user()->notelp)
                                                            {{ auth()->user()->notelp }}
                                                        @else
                                                            -
                                                        @endif
                                                    </h6>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600" style="font-size: 25px">Usia</p>
                                                    <h6 class="text-muted f-w-400" style="font-size: 20px">
                                                        @if (auth()->user()->tgllahir)
                                                            {{ auth()->user()->tgllahir->diffInYears(now()) }}
                                                        @else
                                                            -
                                                        @endif
                                                    </h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600" style="font-size: 25px">Total Donasi</p>
                                                    <h6 class="text-muted f-w-400" style="font-size: 20px">
                                                        @if (auth()->user()->totalsaldo)
                                                            Rp {{ number_format(auth()->user()->totalsaldo, 2, ',','.') }}
                                                        @else
                                                            -
                                                        @endif
                                                    </h6>
                                                </div>
                                            </div>
                                            <br>

                                            <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                            </ul>
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

</main>
<!-- End #main -->
@endsection
