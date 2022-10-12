<div class="form-body">
    <h4 class="form-section"><i class="fa fa-user-secret"></i> Management User</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group row">
                <label class="col-md-3 label-control">Nama</label>
                <div class="col-md-9">   
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control">Email</label>
                <div class="col-md-9">   
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email' ]) !!}
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
            <div class="form-group row">
                <label class="col-md-3 label-control">Role</label>
                <div class="col-md-9">   
                    @if(Request::segment(3) == 'create' )
                        {!! Form::select('roles[]', $roles,[], array('class' => 'select2 form-control','multiple')) !!}
                    @else
                        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'select2 form-control','multiple')) !!}
                    @endif

                </div>
            </div>

            @if(Request::segment(3) == 'create' )

            <div class="form-group row has-icon-left">
                <label class="col-md-3 label-control">Password</label>
                <div class="col-md-9">
                    <input name="password" type="password" class="form-control" id="pass" placeholder="Password" required>
                    <div class="form-control-position">
                        <span id="mybutton" onclick="change()"><i class="feather icon-eye"></i></span>
                    </div>
                </div>
            </div>

            <div class="form-group row has-icon-left">
                <label class="col-md-3 label-control">Konfirmasi Password</label>
                <div class="col-md-9">
                    <input name="password_confirmation" type="password" class="form-control" id="passs" placeholder="Konfirmasi Password" required>
                    <div class="form-control-position">
                        <span id="mybutton2" onclick="change2()"><i class="feather icon-eye"></i></span>
                    </div>
                </div>
            </div>

            @endif

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
                    <input name="password_confirmation" type="password" class="form-control" id="passs" placeholder="Konfirmasi Password">
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