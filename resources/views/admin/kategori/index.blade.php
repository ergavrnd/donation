@extends('layout.admin')
@section('container')
<h1 class="display-1 text-center mb-5">Kategori Program DoNation</h1>
@if (session()->has('success'))
    <div class="row justify-content-center">
        <div class="alert alert-danger col-lg-6" role="alert">
            {{ session('success') }}
        </div>
    </div>
@endif
<div class="row d-flex justify-content-center">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title">Jumlah Kategori Program : {{ $kategori->count() }}</h4>
                    </div>
                    <div class="col text-end">
                        <a class="btn btn-gradient-primary btn-fw" href="/dashboard/createkategori">Buat kategori baru</a>
                    </div>
                </div>

                <table class="table table-responsive table-striped text-center">

                    <thead>
                        <tr>
                            <th> No </th>
                            <th> Nama Kategori </th>
                            <th> Slug </th>
                            <th> Dibuat pada </th>
                            <th> Daftar Program </th>
                            <th> Aksi </th>
                        </tr>
                    </thead>

                    <tbody>
                        @if ($kategori->count() == 0)

                    </tbody>
                </table>
                            <div class="text-center mt-3">
                                <strong style="color: #6C7293; font-family:courier new">Daftar kategori program tidak tersedia!</strong>
                            </div>
                        @else

                            @foreach ($kategori as $kat)
                                <tr>
                                    <td>
                                        <strong>{{ $kategori->firstItem() + $loop->index }}</strong>
                                    </td>
                                    <td>
                                        <span class="pl-2">{{ $kat->nama }}</span>
                                    </td>
                                    <td> {{ $kat->slug }} </td>
                                    <td> {{ \Carbon\Carbon::parse($kat->created_at)->translatedFormat('l, d F Y') }}</td>
                                    <td> <a class="btn btn-primary" style="margin-right: 5px; border-radius: 5px; background-color: rgb(50, 45, 134); padding: 12px 27px 12px 27px" href="/dashboard/daftarprogram/{{ $kat->slug }}">Detail</a> </td>
                                    {{-- <td> {{ $kat->updated_at }}</td> --}}
                                    <td>
                                        @if (auth()->user())
                                            <div class="row justify-content-center">
                                                <div class="col-6">
                                                    <a href="/dashboard/updatekategori/{{ $kat->slug }}" class="btn btn-light" style="margin-right: 5px; border-radius: 5px; background-color: rgb(26, 100, 63); color: white; padding: 12px 27px 12px 27px">Update</a>
                                                </div>
                                                <div class="col-6">
                                                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#{{ $kat->id }}" style="margin-right: 5px; border-radius: 5px; background-color: rgb(125, 26, 19); color: white; padding: 12px 27px 12px 27px">Hapus</button>
                                                    {{-- Modal button hapus --}}
                                                    <div class="modal fade" id="{{ $kat->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content" style="background-color: white; color:white; border-radius: 1rem; width: 1150px; color: black">
                                                                <div class="modal-header">
                                                                <h1 class="modal-title fs-1" id="exampleModalLabel">Kategori: {{ $kat->nama }}</h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Apakah anda yakin untuk menghapus kategori progam ini?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" style="margin-right: 5px; border-radius: 5px; background-color: rgb(13, 105, 30); color: white; padding: 12px 27px 12px 27px">Tidak</button>
                                                                    <form action="/dashboard/hapuskategori" >
                                                                        @csrf
                                                                        <input type="hidden" name="id" value="{{ $kat->id }}">
                                                                        <button type="submit" class="btn btn-light" style="margin-right: 5px; border-radius: 5px; background-color: rgb(125, 26, 19); color: white; padding: 12px 27px 12px 27px">Iya</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- End Modal button hapus --}}
                                                </div>

                                            </div>
                                        @else
                                            <div class="row justify-content-center">
                                                <div class="col-6">
                                                    <a href="/dashboard/updatekategori/{{ $kat->slug }}" class="btn btn-light" style="margin-right: 5px; border-radius: 5px; background-color: rgb(26, 100, 63); color: white; padding: 12px 27px 12px 27px; pointer-events: none" title="Anda tidak punya hak akses untuk kategori ini">Update</a>
                                                </div>
                                                <div class="col-6">
                                                    <form action="">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $kategori[0]->id }}">
                                                        {{-- <button type="submit" class="nav-link active btn btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus Post?')">Delete</button> --}}
                                                        <button type="submit" class="btn btn-light" style="margin-right: 5px; border-radius: 5px; background-color: rgb(125, 26, 19); color: white; padding: 12px 27px 12px 27px; pointer-events: none" title="Anda tidak punya hak akses untuk kategori ini">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
                        @endif
            </div>
        </div>
    </div>
</div>
@endsection
