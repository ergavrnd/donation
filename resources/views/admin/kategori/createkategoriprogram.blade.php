@extends('layout.admin')
@section('container')
<h1 class="display-1 text-center mb-5">Create Kategori Program DoNation</h1>
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
                            <h4 class="card-title">Create Kategori Program</h4>
                        </div>
                        <div class="col text-end">
                            <a class="btn btn-gradient-dark  btn-fw" href="/dashboard/kategoriprogram">Lihat daftar kategori</a>
                        </div>
                    </div>
                    {{-- <p class="card-description"> Basic form elements </p> --}}
                <form class="forms-sample" action="/dashboard/createkategori" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Kategori Program</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama kategori program" required value="{{ old('nama') }}" autofocus>
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" placeholder="Slug" required value="{{ old('slug') }}"/>
                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button type="reset" class="btn btn-light" style="border-radius: 5px; background-color: rgb(125, 26, 19); color: white; padding: 14px 40px 14px 40px">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    const nama = document.querySelector('#nama');
    const slug = document.querySelector('#slug');
    nama.addEventListener('change', function(){
        fetch('/createslugkategori?nama=' + nama.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
</script>
@endsection
