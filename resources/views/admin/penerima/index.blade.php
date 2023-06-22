@section('title', 'Penerima | Sobo Aksi')
@extends('layouts.utama')

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Penerima</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Posting</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Data Posting</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-6 col-12">
        <div class="form-group">
           <a href="{{ route('admin:posting.create') }}" class="btn btn-lg round mr-1 mb-1" style="color: rgb(255, 255, 255);
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
                                    <tr>
                                        <th>No</th>
                                        <th>No Identitas</th>
                                        <th>Jenis Identitas</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Provinsi</th>
                                        <th>Kabupaten</th>
                                        <th>Kecamatan</th>
                                        <th>Kelurahan</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
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
            { data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false, className: "text-left"},
            { data: 'no_identitas'},
            { data: 'identitas.code_nm'},
            { data: 'nama'},
            { data: 'alamat'},
            { data: 'provinsi.region_nm'},
            { data: 'kabupaten.region_nm'},
            { data: 'kecamatan.region_nm'},
            { data: 'kelurahan.region_nm'},
            { data: 'action', name: 'action',  orderable: false, searchable: false },
        ]
    });
</script>

<script type="text/javascript">
    function sweetAlert()
    {
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 2000
        })
    }

    @if(session('status'))
    sweetAlert();
    @endif
</script>

@endpush
