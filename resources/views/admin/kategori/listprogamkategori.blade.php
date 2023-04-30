@extends('layout.admin')
@section('container')
<h1 class="display-1 text-center mb-5">Program DoNation Kategori {{ $kategori[0]->nama }}</h1>
@if (session()->has('success'))
    <div class="row justify-content-center">
        <div class="alert alert-danger col-lg-6" role="alert">
            {{ session('success') }}
        </div>
    </div>
@endif
<div class="row d-flex justify-content-center">
    <div class="col-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title">Jumlah Program dalam kategori ini : {{ $program->count() }}</h4>
                    </div>
                </div>

                <table class="table table-striped text-center">

                    <thead>
                        <tr>
                            <th>
                                <strong>No</strong>
                            </th>
                            <th> Nama program </th>
                            <th> Slug </th>
                            <th> Dibuat oleh </th>
                            <th> Dana terkumpul </th>
                            <th> Target dana </th>
                            <th> Status program </th>
                            <th> Tanggal dibuat </th>
                        </tr>
                    </thead>

                    <tbody>
                        @if ($program->count() == 0)

                    </tbody>
                </table>
                            <div class="text-center mt-3">
                                <strong style="color: #6C7293; font-family:courier new">Daftar program DoNation tidak tersedia!</strong>
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
                                <td> Rp {{ number_format($prog->danaskrg, 2, ',','.') }} </td>
                                <td> Rp {{ number_format($prog->targetdana, 2, ',','.') }} </td>
                                <td>
                                    @if ($prog->status == 1)
                                        <div class="badge badge-outline-warning" style="padding-left: 15px; padding-right: 15px">Pending</div>
                                    @elseif ($prog->status == 2)
                                    <div class="badge badge-outline-info" style="padding-left: 24px; padding-right: 24px">Aktif</div>
                                    @elseif ($prog->status == 3)
                                        <div class="badge badge-outline-light">Non Aktif</div>
                                    @elseif ($prog->status == 4)
                                        <div class="badge badge-outline-danger" style="padding-left: 23px; padding-right: 23px">Batal</div>
                                    @else
                                        <div class="badge badge-outline-success" style="padding-left: 18px; padding-right: 18px">Selesai</div>
                                    @endif
                                </td>
                                <td> {{ $prog->created_at->format('D d/M/Y') }} </td>
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
