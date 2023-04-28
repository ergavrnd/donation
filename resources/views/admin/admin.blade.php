@extends("layout.admin")
@section('container')
    <div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
        </span> Dashboard
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
        </li>
        </ul>
    </nav>
    </div>
    <div class="row">
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
        <a class="text-white" href="">
            <div class="card-body">
            <img src="admin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3" href="/dashboard/kategori">Program yang diajukan <i class="mdi mdi-checkbox-multiple-blank mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">45,6334</h2>
            </div>
        </a>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
        <a class="text-white" href="">
            <div class="card-body">
            <img src="admin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Program yang telah terlaksana <i class="mdi mdi-checkbox-multiple-marked mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">45,6334</h2>
            </div>
        </a>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
        <a class="text-white" href="">
            <div class="card-body">
            <img src="admin/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Total program <i class="mdi mdi-folder-multiple-outline mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">95,5741</h2>
            </div>
        </a>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">5 Donatur terbaik</h4>
            <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th> Nama </th>
                    <th> Subject </th>
                    <th> Status </th>
                    <th> Last Update </th>
                    <th> Tracking ID </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                    <img src="admin/images/faces/face1.jpg" class="me-2" alt="image"> David Grey
                    </td>
                    <td> Fund is not recieved </td>
                    <td>
                    <label class="badge badge-gradient-success">DONE</label>
                    </td>
                    <td> Dec 5, 2017 </td>
                    <td> WD-12345 </td>
                </tr>
                <tr>
                    <td>
                    <img src="admin/images/faces/face2.jpg" class="me-2" alt="image"> Stella Johnson
                    </td>
                    <td> High loading time </td>
                    <td>
                    <label class="badge badge-gradient-warning">PROGRESS</label>
                    </td>
                    <td> Dec 12, 2017 </td>
                    <td> WD-12346 </td>
                </tr>
                <tr>
                    <td>
                    <img src="admin/images/faces/face3.jpg" class="me-2" alt="image"> Marina Michel
                    </td>
                    <td> Website down for one week </td>
                    <td>
                    <label class="badge badge-gradient-info">ON HOLD</label>
                    </td>
                    <td> Dec 16, 2017 </td>
                    <td> WD-12347 </td>
                </tr>
                <tr>
                    <td>
                    <img src="admin/images/faces/face4.jpg" class="me-2" alt="image"> John Doe
                    </td>
                    <td> Loosing control on server </td>
                    <td>
                    <label class="badge badge-gradient-danger">REJECTED</label>
                    </td>
                    <td> Dec 3, 2017 </td>
                    <td> WD-12348 </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    </div>
@endsection
