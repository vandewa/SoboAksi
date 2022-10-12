<div class="form-body">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group row">
                <label class="col-md-3 label-control">Nama</label>
                <div class="col-md-9">   
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Masukkan nama (tanpa ada spasi)']) !!}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-actions right">
    <a href="{{ redirect()->getUrlGenerator()->previous() }}">
        <button type="button" class="btn btn-warning mr-1">
            <i class="feather icon-x"></i> Cancel
        </button>
    </a>

    <button type="submit" class="btn btn-primary">
        <i class="fa fa-check-square-o"></i> Save
    </button>
</div>