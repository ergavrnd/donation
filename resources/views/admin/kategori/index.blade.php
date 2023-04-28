@extends('layout.admin')
@section('container')
<h1 class="display-1 text-center mb-5">Kategori Program DoNation</h1>
<div class="row d-flex justify-content-center">
    <div class="col-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title">Striped Table</h4>
                    </div>
                    <div class="col text-end">
                        <a class="btn btn-gradient-primary btn-fw">Buat kategori baru</a>
                    </div>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> No </th>
                            <th> Nama Kategori </th>
                            <th> Slug </th>
                            <th> Daftar Program </th>
                            <th> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="py-1">
                            <strong>{{ $homeworks->firstItem() + $loop->index }}</strong>
                        </td>
                        <td> Herman Beck </td>
                        <td>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </td>
                        <td> $ 77.99 </td>
                        <td> May 15, 2015 </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
