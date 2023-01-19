<div class="form-body">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Sampul Gambar</label><br>    
                        @if(Request::segment(4) == 'edit')
                        <img id="preview-image-before-upload2" src="{{ $data->sampul->url_photo }}" alt="preview image" style="max-height: 250px; max-width: 400px;">
                        @endif
                        {!! Form::file('photo', ['class' => 'form-control', 'accept' => 'image/png, image/jpeg', 'id' => 'foto_penerima']) !!}
                    </div>
                </div>
            </div>
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
                        {{Form::textarea('deskripsi', null, ['id'=>'editor', 'rows' => 5])}}
                    </div>
                </div>
            </div>
            @if(Request::segment(2) == 'donasi' && Request::segment(3) == 'create' || Request::segment(2) == 'donasi' && Request::segment(4) == 'edit' )
            @if (empty($data))
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Penerima</label>
                        {!! Form::select('penerima_id', $penerima,null, ['class' => 'form-control select2', 'placeholder' => '- Pilih Penerima -']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Target Donasi (Rupiah)</label>
                        {!! Form::number('target_donasi', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Batas Pengumpulan Donasi</label>
                        {!! Form::date('target_waktu', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>   
            <div class="row ">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Highlight</label>
                        {!! Form::select('highlight', ['1' => 'Ya', '0' => 'Tidak', ], null, ['class' => 'form-control', 'placeholder' => '- Pilih Highlight -']) !!}
                    </div>
                </div>
            </div>   
            @else
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Penerima</label>
                        {!! Form::select('penerima_id', $penerima,$data->penerimaDonasi->penerima_id, ['class' => 'form-control select2', 'placeholder' => '- Pilih Penerima -']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Target Donasi (Rupiah)</label>
                        {!! Form::number('target_donasi', $data->penerimaDonasi->target_donasi, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Batas Pengumpulan Donasi</label>
                        {!! Form::date('target_waktu', $data->penerimaDonasi->target_waktu, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>   
            <div class="row ">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Highlight</label>
                        {!! Form::select('highlight', ['1' => 'Ya', '0' => 'Tidak', ], null, ['class' => 'form-control', 'placeholder' => '- Pilih Highlight -']) !!}
                    </div>
                </div>
            </div>  
            @endif
            
            
            
            @endif
            @if(Request::segment(4) == 'edit' )
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
            @endif
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
            @if(Request::segment(2) == 'donasi' && Request::segment(3) == 'create' )
                <div class="row ">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tanggal Publikasi</label>
                            {!! Form::date('publish_at', date('Y-m-d'), ['class' => 'form-control']) !!}
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
        $('#foto_penerima').change(function() {
            console.log('berubah');
            let reader = new FileReader();

            reader.onload = (e) => {

                $('#preview-image-before-upload2').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

            });
        });
</script>

@endpush