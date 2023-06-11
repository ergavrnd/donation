@extends('layout.admin')
@section('container')
<h1 class="display-1 text-center mb-5">Pending Program DoNation</h1>
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
                        <h4 class="card-title">Jumlah Pending Program DoNation : {{ $program->count() }}</h4>
                    </div>
                </div>

                <table class="table table-striped text-center">

                    <thead>
                        <tr>
                            <th>
                                <strong>No</strong>
                            </th>
                            <th> Nama program </th>
                            <th> Kategori program </th>
                            <th> Dibuat oleh </th>
                            <th> Target dana </th>
                            <th> Status program </th>
                            <th> Deadline program</th>
                            <th> Tanggal pengajuan </th>
                        </tr>
                    </thead>

                    <tbody>
                        @if ($program->count() == 0)

                    </tbody>
                </table>
                            <div class="text-center mt-3">
                                <strong style="color: #6C7293; font-family:courier new">Daftar pending program DoNation tidak tersedia!</strong>
                            </div>
                        @else

                        @foreach ($program as $prog)
                            <tr>
                                <td>
                                    <strong>{{ $program->firstItem() + $loop->index }}</strong>
                                </td>
                                <td>
                                    <span class="pl-2">{{ $prog->nama }}</span>
                                </td>
                                <td> {{ $prog->kategori->nama }} </td>
                                <td> {{ $prog->user->name }} </td>
                                <td> Rp {{ number_format($prog->targetdana, 2, ',','.') }} </td>
                                <td>
                                    <a href="/dashboard-detailprogram/{{ $prog->slug }}" style="text-decoration: none" class="btn btn-warning btn-lg">Pending</a>
                                </td>
                                <td> {{ \Carbon\Carbon::parse($prog->deadline)->translatedFormat('l, d F Y') }} </td>
                                <td> {{ \Carbon\Carbon::parse($prog->created_at)->translatedFormat('l, d F Y') }} </td>
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
