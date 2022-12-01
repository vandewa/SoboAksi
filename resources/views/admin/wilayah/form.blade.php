<div class="form-body">
    <h4 class="form-section"><i class="fa fa-globe"></i> Management Wilayah</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kode Provinsi</label>
                        {!! Form::text('region_cd', null, ['class' => 'form-control', 'placeholder' => 'Kode Provinsi'])
                        !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Provinsi</label>
                        {!! Form::text('region_nm', null, ['class' => 'form-control', 'placeholder' => 'Nama Provinsi'])
                        !!}
                    </div>
                </div>
            </div>

            @if(Request::segment(4) == 'edit' )

            <h4 class="form-section"><i class="fa fa-key"></i> Ganti Password</h4>

            <div class="form-group row has-icon-left">
                <label class="col-md-3 label-control">Password</label>
                <div class="col-md-9">
                    <input name="password" type="password" class="form-control" id="pass" placeholder="Password">
                    <div class="form-control-position">
                        <span id="mybutton" onclick="change()"><i class="feather icon-eye"></i></span>
                    </div>
                </div>
            </div>

            <div class="form-group row has-icon-left">
                <label class="col-md-3 label-control">Konfirmasi Password</label>
                <div class="col-md-9">
                    <input name="password_confirmation" type="password" class="form-control" id="passs"
                        placeholder="Konfirmasi Password">
                    <div class="form-control-position">
                        <span id="mybutton2" onclick="change2()"><i class="feather icon-eye"></i></span>
                    </div>
                </div>
            </div>

            @endif

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

@push('js')
@endpush