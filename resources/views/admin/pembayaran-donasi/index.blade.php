@section('title', 'Penerima | Sobo Aksi')
@extends('layouts.utama')

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Pembayaran Donasi</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb"> 
                    <li class="breadcrumb-item"><a href="#">Pembayaran Donasi</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Data Pembayaran Donasi</a>
                    </li>
                </ol>
            </div>
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
                                        <th>Aksi</th>
                                        <th>Donatur</th>
                                        <th>Jumlah Donasi</th>
                                        <th>Tanggal Buat</th>
                                        <th>Tanggal Bayar</th>
                                        <th>Status</th>
                                        {{-- <th class="text-center">Aksi</th> --}}
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
            { data: 'aksi.judul'},
            { data: 'donatur.name'},
            { data: 'payment', orderable: false, searchable: false},
            { data: 'request_payment', orderable: false, searchable: false},
            { data: 'payment_date', orderable: false, searchable: false},
            { data: 'payment_status', orderable: false, searchable: false},
            // { data: 'action', name: 'action',  orderable: false, searchable: false },
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