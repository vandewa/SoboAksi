<div class="form-body">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group row">
                <label class="col-md-3 label-control">Nama Kategori</label>
                <div class="col-md-9">   
                    {!! Form::text('nama_kategori', null, ['class' => 'form-control', 'placeholder' => 'Masukkan nama kategori']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group row">
                <label class="col-md-3 label-control">Icon</label>
                <div class="col-md-9">   
                    @if (Request::segment(3) == 'create')
                        {!! Form::file('icon', null, ['class' => 'form-control', 'accept' => 'image/*']) !!}
                    @else
                        {!! Form::file('icon', null, ['class' => 'form-control', 'accept' => 'image/*']) !!}
                        @if($data->icon == null)
                        <img id="preview-image-before-upload" src="{{ asset('trusthand/assets/images/icons/noimage.png') }}" alt="preview image" style="max-height: 250px;">
                        @else
                        <img id="preview-image-before-upload" src="{{asset('trusthand/assets/images/icons/'. $data->icon)}}" alt="preview image" style="max-height: 250px; max-width: 400px;">
                        @endif
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