@extends('layouts.utama')

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Detail Role</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Data Role</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Management Role</a>
                    </li>
                    <li class="breadcrumb-item active">Detail Role
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
                    <h4 class="card-title" id="horz-layout-colored-controls">Detail Role</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                </div>
                <div class="card-content collpase show">
                    <div class="card-body">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Nama</label>
                                        <div class="col-md-9">   
                                            {!! Form::text('name', $data->name, array('placeholder' => 'Name','class' => 'form-control', 'readonly' => 'readonly')) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Permission</label>
                                        <div class="col-md-9">   
                                            @if(!empty($rolePermissions))
                                                @foreach($rolePermissions as $v)
                                                    <label class="label label-success">{{ $v->name }},</label>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-actions right">
                            <a href="{{ redirect()->getUrlGenerator()->previous() }}">
                                <button type="button" class="btn btn-warning mr-1">
                                    <i class="feather icon-corner-up-left"></i> Back
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
{!! JsValidator::formRequest('App\Http\Requests\UserStoreValidation','#my-form') !!}
 <script>
    function change()
     {
        var x = document.getElementById('pass').type;
        if (x == 'password')
        {
           document.getElementById('pass').type = 'text';
           document.getElementById('mybutton').innerHTML = '<i class="feather icon-eye-off"></i>';
        }
        else
        {
           document.getElementById('pass').type = 'password';
           document.getElementById('mybutton').innerHTML = '<i class="feather icon-eye"></i>';
        }
     }
</script>

<script>
    function change2()
     {
        var x = document.getElementById('passs').type;
        if (x == 'password')
        {
           document.getElementById('passs').type = 'text';
           document.getElementById('mybutton2').innerHTML = '<i class="feather icon-eye-off"></i>';
        }
        else
        {
           document.getElementById('passs').type = 'password';
           document.getElementById('mybutton2').innerHTML = '<i class="feather icon-eye"></i>';
        }
     }
</script>
@endpush