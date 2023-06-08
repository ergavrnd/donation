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

                                <span>Nominal Donasi</span>
                                <input class="formpay @error('nominal') is-invalid @enderror" name="nominal" type="text" placeholder="Rp1.000.000,00"
                                id="txtExampleBoxOne" onkeypress="return number(event )" onBlur="formatCurrency(this, 'Rp ', 'blur');" onkeyup="formatCurrency(this, 'Rp ');" data-inputmask="'alias': 'numeric', 'autoGroup' :true, 'digitsOptional':false, 'removeMaskOnSubmit' : true, 'autoUnmask' : true"required value="{{ old('nominal') }}">


                                <div class="donatur">
                                    <span>Nama Donatur</span>
                                    {{ $payment->namaDonatur }}
                                </div>
                                {{-- <span>Ingin donasi sebagai anonim?</span>
                                <div class="d-flex">
                                    <label for="Ya" class="me-5">
                                        <input id="Ya" class="mb-2" type="radio" name="choice" value="{{ $payment }}">
                                        <p class="text-center">Ya</p>
                                    </label>
                                    <label for="Tidak">
                                        <input id="Tidak" class="mb-2" type="radio" name="choice" value="Tidak">
                                        <p class="text-center">Tidak</p>
                                    </label>
                                </div> --}}
                                <div class="donatur">
                                    <span>Doa yang Ingin Disampaikan </span>
                                    <input class="formpay @error('doa') is-invalid @enderror" type="text"  name="doa" id="doa" required value="{{ $payment->doa}}" disabled>
                                </div>

                            {{-- </form> --}}
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="right border">
                            {{-- <div class="textborder">
                                <div class="header">Membantu program :</div>
                                <p>{{ $program->nama }}</p>
                                <div class="row item">
                                    <div class="col-4 align-self-center"><img class="img-fluid"
                                            src="{{ asset('storage/' . $program->gambar) }}"></div>
                                </div>
                            </div> --}}
                            <hr>
                            <button class="btn" type="submit" id="pay-button">Donasi</button>

                        </div>
                    </div>
                </div>
            </div>

            <div>
            </div>
        </div>
    </section>

    <script type="text/javascript">

    function formatNumber(n) {
          return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }
        function formatCurrency(input, currency, blur) {
          // appends $ to value, validates decimal side
          // and puts cursor back in right position.
          // get input value
          var input_val = input.value;
          // don't validate empty input
          if (input_val === "") {
            return;
          }
          // original length
          var original_len = input_val.length;
          // initial caret position
          var caret_pos = input.selectionStart;
          // check for decimal
          if (input_val.indexOf(",") >= 0) {
            // get position of first decimal
            // this prevents multiple decimals from
            // being entered
            var decimal_pos = input_val.indexOf(",");
            // split number by decimal point
            var left_side = input_val.substring(0, decimal_pos);
            var right_side = input_val.substring(decimal_pos);
            // add commas to left side of number
            left_side = formatNumber(left_side);
            // validate right side
            right_side = formatNumber(right_side);
            // On blur make sure 2 numbers after decimal
            if (blur === "blur") {
              right_side += "00";
            }
            // Limit decimal to only 2 digits
            right_side = right_side.substring(0, 2);
            // join number by .
            input_val = currency + left_side + "," + right_side;
          } else {
            // no decimal entered
            // add commas to number
            // remove all non-digits
            input_val = formatNumber(input_val);
            input_val = currency + input_val;
            // final formatting
            if (blur === "blur") {
              input_val += ",00";
            }
          }
          // send updated string to input
          input.value = input_val;
          // put caret back in the right position
          var updated_len = input_val.length;
          caret_pos = updated_len - original_len + caret_pos;
          input.setSelectionRange(caret_pos, caret_pos);
          function number(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
            if(charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
          }
        }

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

        <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function (result) {
                    /* You may add your own implementation here */
                    //   alert("payment success!");
                    window.location.href = '/dashboard/user'
                    console.log(result);
                },
                onPending: function (result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function (result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function () {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });

    </script>
    </script>
@endsection
