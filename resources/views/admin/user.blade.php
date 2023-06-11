@extends('layout.admin')
@section('container')
<h1 class="display-1 text-center mb-5">User Website DoNation</h1>
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
                        <h4 class="card-title">Jumlah Pengguna Terdaftar : {{ $user->count() }}</h4>
                    </div>
                </div>

                <table class="table table-responsive table-striped text-center">

                    <thead>
                        <tr>
                            <th> No </th>
                            <th> Nama </th>
                            <th> Username </th>
                            <th> Email </th>
                            <th> Status </th>
                        </tr>
                    </thead>

                    <tbody>
                        @if ($user->count() == 0)

                    </tbody>
                </table>
                            <div class="text-center mt-3">
                                <strong style="color: #6C7293; font-family:courier new">Daftar kategori program tidak tersedia!</strong>
                            </div>
                        @else

                            @foreach ($user as $us)
                                <tr>
                                    <td>
                                        <strong>{{ $user->firstItem() + $loop->index }}</strong>
                                    </td>
                                    <td>
                                        <span class="pl-2">{{ $us->name }}</span>
                                    </td>
                                    <td> {{ $us->username }} </td>
                                    <td>{{ $us->email }}</td>
                                    <td>
                                        @if ($us->roleid == 1)
                                            Admin
                                        @else
                                            Wong biasa
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
