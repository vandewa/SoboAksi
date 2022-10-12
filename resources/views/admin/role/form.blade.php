<div class="form-body">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group row">
                <label class="col-md-3 label-control">Nama</label>
                <div class="col-md-9">   
                    {{-- {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Masukkan nama (tanpa ada spasi)']) !!} --}}
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control">Permission</label>
                <div class="col-md-9">   
                    {{-- {!! Form::text('guard_name', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Alias']) !!} --}}

                    @if(Request::segment(3) == 'create' )

                        @foreach($permission as $value)
                            <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                            {{ $value->name }}</label>
                        <br/>
                        @endforeach

                    @else

                        @foreach($permission as $value)
                            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                            {{ $value->name }}</label>
                        <br/>
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
            <i class="feather icon-x"></i> Cancel
        </button>
    </a>

    <button type="submit" class="btn btn-primary">
        <i class="fa fa-check-square-o"></i> Save
    </button>
</div>