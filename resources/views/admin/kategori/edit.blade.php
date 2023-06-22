@section('title', 'Edit Kategori | Sobo Aksi')
@extends('layouts.utama')

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Edit Kategori</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Data Kategori</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Kategori
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content-body">  
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="horz-layout-colored-controls">Edit Kategori</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                </div>
                <div class="card-content collpase show">
                    <div class="card-body">
                        {{Form::model($data, ['route' => ['admin:kategori.update', $data->id],'method' => 'put', 'id' => 'my-form', 'files' => true])}}
                        
                        @include('admin.kategori.form')
                            
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\KategoriUpdateValidation','#my-form') !!}
@endpush