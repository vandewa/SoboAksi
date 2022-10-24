@extends('layouts.utama')

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Management Wilayah</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Data Wilayah</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Management Wilayah</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-6 col-12">
        <div class="form-group">
            <a href="{{ route('admin:wilayah.create') }}" class="btn btn-lg round mr-1 mb-1"
                style="color: rgb(255, 255, 255);
           box-shadow: none;
           background-color: rgb(51, 88, 244) !important;
           background-image: linear-gradient(to left bottom, rgb(29, 140, 248), rgb(51, 88, 244), rgb(29, 140, 248)) !important;">
                <i class="fa fa-plus-circle"></i>
                Tambah Data
            </a>
        </div>
    </div>
</div>

<div class="content-body">
    <!-- users list start -->
    <section class="users-list-wrapper">
        <div class="users-list-table">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <!-- datatable start -->
                        <div class="table-responsive">
                            <table class="table table-striped devan w-100">
                                <thead>
                                    @if(request('kab'))
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kecamatan</th>
                                        <th>Nama Kecamatan</th>
                                        <th>List Desa</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                    @elseif(request('kode'))
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kabupaten</th>
                                        <th>Nama Kabupaten</th>
                                        <th>List Kecamatan</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                    @else
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Provinsi</th>
                                        <th>Nama Provinsi</th>
                                        <th>List Kabupaten</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                    @endif
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <!-- datatable ends -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- users list ends -->
</div>

@endsection

@push('js')

<script type="text/javascript">
    var table = $('.devan').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: window.location.href,
        columns: [
            { data: 'DT_RowIndex', orderable: false, searchable: false, className: "text-left" },
            { data: 'region_cd' },
            { data: 'region_nm' },
            { data: 'kab', className: "text-center" },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ]
    });

    function sweetAlert() {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 2000
        })
    }
</script>

@if(session('status'))
sweetAlert();
@endif

@endpush