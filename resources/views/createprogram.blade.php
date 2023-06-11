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

	<div id="booking" class="section" style="">
		<div class="section-center">
			<div class="container">
				<div class="row">
                    @if (session()->has('success'))
                        <div class="row justify-content-center mb-5">
                            <div class="alert alert-success alert-dismissible fade show col-lg-6 text-center d-flex justify-content-center" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    @endif

					<div class="booking-form">
						<div class="booking-bg">
							<div class="form-header">
								<h2>Galang Donasi</h2>
								<p>Bentuk kepedulian kepada saudara kita yang membutuhkan.</p>
							</div>
						</div>
						<form action="galangdonasi" method="POST" enctype="multipart/form-data">
                            @csrf

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Nama Program</span>
										<input class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" type="text" placeholder="Nama Program Anda" required value="{{ old('nama') }}">
									</div>
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
								</div>

                                <div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Kategori Program</span>
										<select class="form-control" id="id_kategori" name="id_kategori">
											<option disabled="disabled" selected="selected">Pilih Kategori</option>
                                            @foreach ($kategori as $kat )
                                                @if (old('id_kategori') == $kat->id)
                                                    <option value="{{ $kat->id }}" selected>{{ $kat->nama }}</option>
                                                @else
                                                    <option value="{{ $kat->id }}">{{ $kat->nama }}</option>
                                                @endif
                                            @endforeach
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Target Dana Donasi</span>
										<input class="form-control @error('targetdana') is-invalid @enderror" name="targetdana" type="text" placeholder="Rp1.000.000,00"
                                        id="txtExampleBoxOne" onkeypress="return number(event )" onBlur="formatCurrency(this, 'Rp ', 'blur');" onkeyup="formatCurrency(this, 'Rp ');" data-inputmask="'alias': 'numeric', 'autoGroup' :true, 'digitsOptional':false, 'removeMaskOnSubmit' : true, 'autoUnmask' : true"required value="{{ old('targetdana') }}">
									</div>
                                    @error('targetdana')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Tenggat Donasi</span>
										<input class="form-control @error('deadline') is-invalid @enderror" name="deadline" type="date" min="{{ date('Y-m-d') }}" required value="{{ old('deadline') }}">
									</div>
                                    @error('deadline')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
								</div>
							</div>

							<div class="col-md-12">
                                <div class="form-group">
                                    <span class="form-label">Deskripsi program</span>
                                    <input class="form-control @error('deskripsi') is-invalid @enderror" type="text"  name="deskripsi" id="deskripsi" placeholder="Tulis deskripsi program disini." required value="{{ old('deskripsi') }}">
                                </div>
                                @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="form-label">Gambar</span>
                                    <input class="form-control @error('gambar') is-invalid @enderror" name="gambar" type="file"required>
                                </div>
                            </div>

							<div class="form-btn">
								<button class="submit-btn" type="submit">Tambahkan Program</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.simple-select2').select2({
                theme: 'bootstrap4',
                placeholder: "Select an option",
                allowClear: true
            });
            $('.simple-select2-sm').select2({
                theme: 'bootstrap4',
                containerCssClass: ':all:',
                placeholder: "Select an option",
                allowClear: true
            });
        });
    </script>
    <script>
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
    </script>
