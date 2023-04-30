@extends('layout.admin')
@section('container')
<h1 class="display-1 text-center mb-5">Create Program DoNation</h1>
@if (session()->has('success'))
    <div class="row justify-content-center">
        <div class="alert alert-success col-lg-6" role="alert">
            {{ session('success') }}
        </div>
    </div>
@endif
@if ($errors)
    @foreach ($errors as $error )
        <p>{{ $error }}</p>
    @endforeach
@endif
<div class="row d-flex justify-content-center">
    <div class="col-6 grid-margin stretch-card">
        <div class="card" style="background-color: rgb(179, 214, 255);">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title">Create Program DoNation</h4>
                    </div>
                    <div class="col text-end">
                        <a class="btn btn-gradient-dark  btn-fw" href="/dashboard/program">Lihat daftar program</a>
                    </div>
                </div>
                {{-- <p class="card-description"> Basic form elements </p> --}}
                <form action="/dashboard/createprogram" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Program</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Program" required value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleSelectGender">Kategori Program</label>
                        <select class="form-select" style="height: 50px" id="id_kategori" name="id_kategori">
                            <option disabled="disabled" selected="selected">Pilih Kategori Program</option>
                            @foreach ($kategori as $kat )
                                @if (old('id_kategori') == $kat->id)
                                    <option value="{{ $kat->id }}">{{ $kat->nama }}</option>
                                @else
                                    <option value="{{ $kat->id }}">{{ $kat->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="currency-field">Target Dana Donasi</label>
                        <input type="text" class="form-control @error('targetdana') is-invalid @enderror" name="targetdana" id="txtExampleBoxOne" onkeypress="return number(event )"
                        onBlur="formatCurrency(this, 'Rp ', 'blur');" onkeyup="formatCurrency(this, 'Rp ');" data-inputmask="'alias': 'numeric', 'autoGroup' :true, 'digitsOptional':false, 'removeMaskOnSubmit' : true, 'autoUnmask' : true"
                        placeholder="Rp 1.000.000,00" required value="{{ old('targetdana') }}">
                        @error('targetdana')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="deadline">Tenggat Donasi</label>
                        <input type="date" class="form-control @error('deadline') is-invalid @enderror"  name="deadline" min="{{ date('Y-m-d') }}" id="inputdate" placeholder="dd/mm/yyyy" required value="{{ old('deadline') }}" >
                        @error('deadline')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Program</label>
                        <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" placeholder="Deskripsi program" required value="{{ old('deskripsi') }}">
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="file-upload-default @error('gambar') is-invalid @enderror" value="{{ old('gambar') }}">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control" style="background-color: white" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-gradient-primary" type="button" style="height: 50px; margin-left: 1px; border-radius: 0 2px 2px 0">Upload</button>
                            </span>
                        </div>
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                            <button type="reset" class="btn btn-light" style="border-radius: 5px; background-color: rgb(125, 26, 19); color: white; padding: 14px 40px 14px 40px">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
@endsection
