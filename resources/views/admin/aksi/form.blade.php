<div class="form-body">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Judul</label>
                        {!! Form::text('judul', null, ['class' => 'form-control', 'placeholder' => 'Nama Aksi']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Kategori</label>
                        {!! Form::select('kategori', $kategori,null, ['class' => 'form-control select2', 'placeholder' => '- Pilih Kategori -']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Deskripsi</label>
                        {{Form::textarea('deskripsi', null, ['class' => 'form-control ','rows' => 2])}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Disetujui</label>
                        {!! Form::select('setuju', ['1' => 'Disetujui', '0' => 'Ditolak', ], null, ['class' => 'form-control', 'placeholder' => '- Pilih Status -']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Publikasi</label>
                        {!! Form::select('publish_st', get_code_group('PUBLISH_ST'),null, ['class' => 'form-control', 'placeholder' => '- Pilih Status Publikasi-']) !!}
                    </div>
                </div>
            </div>
            <div class="row devandewa" style="display: none">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Tanggal Publikasi</label>
                        {!! Form::date('publish_at', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            @if(Request::segment(4) == 'edit' )
                @if ($data->publish_st == 'PUBLISH_ST_01')
                <div class="row devan">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tanggal Publikasi</label>
                            {!! Form::date('publish_at', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>   
                @endif
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
<script>
    $(document).ready(function(){
        $('select[name=publish_st]').change(function(){
            let isi = $(this).val();

            if(isi == 'PUBLISH_ST_01' ){
                $('.devandewa').show('slow');
                $('.devan').hide('slow');
            }else{
                $('.devandewa').hide('slow');
                $('.devan').hide('slow');
                // $('#aa').val('');
            }
        });
    });
</script>
    
@endpush