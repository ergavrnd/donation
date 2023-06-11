@extends('layout.main')
@section('babayo')
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="sliderpay">
            <div class="card-top border-bottom text-center">
                <a href="{{ url()->previous() }}"> Kembali</a>
                <span id="logo">BBBootstrap.com</span>
            </div>
            <div class="card-body">
                <div class="row upper">
                    {{-- <span><i class="fa fa-check-circle-o"></i> Shopping bag</span>
                <span><i class="fa fa-check-circle-o"></i> Order details</span>
                <span id="payment"><span id="three">3</span>Payment</span> --}}
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="left border">
                            <div class="row">
                                {{-- <span class="header">Masukkan Nominal Donasi</span> --}}
                                {{-- <div class="icons">
                                <img src="https://img.icons8.com/color/48/000000/visa.png"/>
                                <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png"/>
                                <img src="https://img.icons8.com/color/48/000000/maestro.png"/>
                            </div> --}}
                            </div>
                            <form>
                                @csrf
                                <span>Masukkan Nominal</span>
                                <input class="formpay" placeholder="Rp20000">
                                {{-- <span>Nama Donatur  </span>
                            <input class="mb-2"> --}}
                                {{-- <input type="checkbox" id="save_card" class="align-left">
                            <label class="mb-3" for="save_card">Tampilkan Sebagai Anonim</label> --}}

                                <div class="donatur">
                                    <span>Nama Donatur</span>
                                    {{-- <input class="formpay" type="email" id="namaDonatur" name="namaDonatur" /> --}}
                                    <input class="formpay @error('namaDonatur') is-invalid @enderror" type="text"  name="namaDonatur" id="namaDonatur" required value="{{ old('namaDonatur') }}">
                                </div>
                                <span>Ingin donasi sebagai anonim?</span>
                                <div class="d-flex">
                                    <label for="Ya" class="me-5">
                                        <input id="Ya" class="mb-2" type="radio" name="choice" value="Ya">
                                        <p class="text-center">Ya</p>
                                    </label>
                                    <label for="Tidak">
                                        <input id="Tidak" class="mb-2" type="radio" name="choice" value="Tidak">
                                        <p class="text-center">Tidak</p>
                                    </label>
                                </div>
                                {{-- <input type="checkbox" id="namaDonatur" name="cek_nama" onchange="checkDisable()" />
                                Sebagai Anonim --}}
                                <div class="donatur">
                                    <span>Doa yang Ingin Disampaikan </span>
                                    {{-- <input class="formpay"> --}}
                                    <input class="formpay @error('doa') is-invalid @enderror" type="text"  name="doa" id="doa" required value="{{ old('doa') }}">
                                    {{-- <div class="col-4"><span>Doa yang Ingin Disampaikan</span>
                                    <input placeholder="YY/MM">
                                </div> --}}
                                    {{-- <div class="col-4"><span>CVV:</span>
                                    <input id="cvv">
                                </div> --}}
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="right border">
                            <div class="textborder">
                                <div class="header">Membantu program :</div>
                                <p>{{ $program->nama }}</p>
                                <div class="row item">
                                    <div class="col-4 align-self-center"><img class="img-fluid"
                                            src="{{ asset('storage/' . $program->gambar) }}"></div>
                                </div>
                            </div>
                            <hr>
                            <button class="btn">Donasi</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        function checkDisable() {
            var checkEmail = document.getElementById('check_email');
            var checkPhone = document.getElementById('check_phone');
            var inputEmail = document.getElementById('ref_email');
            var inputPhone = document.getElementById('form-field-phone');
            if (checkEmail.checked) {
                inputPhone.disabled = true;
            }
            if (checkPhone.checked) {
                inputEmail.disabled = true;
            }
            if (checkEmail.checked && checkPhone.checked) {
                inputEmail.disabled = false;
                inputPhone.disabled = false;
            }
            if (!checkEmail.checked && !checkPhone.checked) {
                inputEmail.disabled = false;
                inputPhone.disabled = false;
            }
        }
    </script>
@endsection
