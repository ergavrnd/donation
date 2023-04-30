@extends('layout.admin')
@section('container')
<h1 class="display-1 text-center mb-5">Program DoNation</h1>
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
                        <h4 class="card-title">Jumlah Program DoNation : {{ $program->count() }}</h4>
                    </div>
                    <div class="col text-end">
                        <a class="btn btn-gradient-primary btn-fw" href="/dashboard/createprogram">Buat program baru</a>
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
                                        <label class="badge badge-warning">Pending</label>
                                    @elseif ($prog->status == 2)
                                        <label class="badge badge-info">Aktif</label>
                                    @elseif ($prog->status == 3)
                                        <label class="badge badge-dark">Non Aktif</label>
                                    @elseif ($prog->status == 4)
                                        <label class="badge badge-danger">Batal</label>
                                    @else
                                        <label class="badge badge-success">Selesai</label>
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
