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
                <h1>(Nama Berita)</h1>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Nama Berita : (namaberita)</li>
                </ol>
            </div>

        </div>
    </section>

    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <img class="img-fluid" style="height: 450px" src="/asse/img/ayah.jpg" alt="">
                            </div>
                        </div>
                        <div class="konten my-5">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dolor erat, fringilla in purus eu, consectetur malesuada mi. Nunc at arcu viverra lorem convallis ornare vitae ac justo. Nunc condimentum porta convallis. Integer auctor aliquam eros, tempor suscipit mauris sollicitudin ut. Vestibulum in nisl ut tortor tristique sodales. Ut aliquet quam nisi, nec maximus tortor laoreet in. Suspendisse mollis maximus sapien a rutrum. Aenean viverra in odio id finibus. Maecenas non enim purus. Donec quis lorem nec ex mattis egestas. Nunc erat purus, pellentesque vel libero id, laoreet ultricies leo.
                            </p>

                            <p>
                                Donec in condimentum sem. Cras in imperdiet lorem. Fusce pellentesque felis eget congue interdum. Ut lobortis sem non diam malesuada convallis. Curabitur finibus placerat neque, non ornare lectus suscipit vitae. Aliquam tempus massa id lectus pretium tincidunt. Aenean id metus pulvinar, dapibus sapien eget, eleifend quam. Etiam ipsum lacus, porta elementum odio sit amet, interdum sodales nibh. Sed lobortis faucibus cursus. Proin venenatis elementum tortor et bibendum. Aenean mauris arcu, dapibus id purus ut, vestibulum consectetur justo. Integer sed sapien ac velit ultricies dignissim. Morbi felis arcu, semper at augue eu, pulvinar scelerisque justo.
                            </p>

                            <p>
                                Fusce suscipit dolor eget orci suscipit, aliquam pellentesque velit tristique. Donec nec efficitur dui. Maecenas a purus eget ante scelerisque commodo eu eu nibh. Mauris non pretium purus. Morbi porta nec tellus vitae vulputate. Suspendisse urna diam, euismod eget dui vel, sollicitudin condimentum mauris. Donec imperdiet urna sit amet elementum feugiat. Praesent leo erat, feugiat at diam ac, consequat condimentum dui. Aenean a purus ut turpis tincidunt elementum. Suspendisse eu odio efficitur, ornare lorem non, vestibulum est. Praesent ultrices scelerisque purus, eu scelerisque sapien commodo eu. Fusce quis tortor felis. In laoreet felis ac est molestie, sed aliquet nulla molestie.
                            </p>

                            <p>
                                Cras id orci mollis, lacinia urna vel, dictum mi. Phasellus ac ex iaculis, feugiat lectus sed, semper nunc. Praesent in dapibus lorem. Vestibulum lacinia mollis dui eget pulvinar. Suspendisse pulvinar odio eu felis tincidunt mollis. Curabitur eleifend leo massa, nec eleifend eros tempus nec. Sed rutrum ac tellus accumsan molestie. Suspendisse bibendum leo ante, sit amet scelerisque urna ultrices a. Aenean ac magna in felis tristique lobortis quis in est. Nullam id dapibus felis. Nullam sodales commodo nisi vitae pharetra. Nulla mollis porta ultricies. Aenean vestibulum purus ac imperdiet venenatis. Nam dignissim nibh non accumsan ornare. Morbi vel ex ullamcorper, cursus purus et, pellentesque dui.
                            </p>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Detail Program Donasi</h3>
                        <ul>
                            <li><strong>Kategori Program</strong>: (namakategori)</li>
                            <li><strong>Penanggung Jawab Program</strong>: (pembuatberita)</li>
                            <li><strong>Dana Terkumpul</strong>:
                            </li>
                            <li><strong>Target Dana</strong>:
                            </li>
                            <li><strong>Berakhir pada</strong>:
                                (tanggaldibuat)</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

</main>
@endsection
