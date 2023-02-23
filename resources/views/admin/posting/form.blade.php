<div class="form-body">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama</label>
                        {!! Form::text('judul', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Telepon</label>
                        {!! Form::number('telepon', null, ['class' => 'form-control', 'placeholder' => 'Masukkan WhatsApp']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Provinsi</label>
                        {{Form::select('region_prop', get_prov(), null, ['class' => 'form-control select2', 'placeholder' => 'Pilih Provinsi', 'id' => 'provinsi'])}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kabupaten</label>
                        @if(Request::segment(3) == 'create' )
                            {{Form::select('region_kab', [], null, ['class' => 'form-control select2', 'placeholder' => 'Pilih Kabupaten','id' => 'kabupaten'])}}
                        @else
                             {{Form::select('region_kab', get_kab($data->region_prop), $kabupaten, ['class' => 'form-control select2', 'placeholder' => 'Pilih Kabupaten','id' => 'kabupaten'])}}
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kecamatan</label>
                        @if(Request::segment(3) == 'create' )
                            {{Form::select('region_kec',[], null, ['class' => 'form-control select2', 'placeholder' => 'Pilih Kecamatan', 'id' => 'kecamatan'])}}
                        @else
                             {{Form::select('region_kec', get_kec($data->region_kab), $kecamatan, ['class' => 'form-control select2', 'placeholder' => 'Pilih Kecamatan','id' => 'kecamatan'])}}
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kelurahan</label>
                        @if(Request::segment(3) == 'create' )
                            {{Form::select('region_kel',[], null, ['class' => 'form-control select2', 'placeholder' => 'Pilih Kelurahan', 'id' => 'kelurahan'])}}
                        @else
                            {{Form::select('region_kel', get_kel($data->region_kec), $kelurahan, ['class' => 'form-control select2', 'placeholder' => 'Pilih Kelurahan', 'id' => 'kelurahan'])}}
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Alamat</label>
                        {!! Form::text('alamat', null, ['class' => 'form-control', 'placeholder' => 'Masukkan alamat']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Identitas</label>
                        {{Form::select('kode_identitas', get_code_group('IDENTITAS_ST'), null, ['class' => 'form-control', 'placeholder' => 'Pilih Identitas', ])}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nomor Identitas</label>
                        {!! Form::number('no_identitas', null, ['class' => 'form-control', 'placeholder' => 'Masukkan nomor identitas']) !!}
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Foto KTP</label>
                        <input type="file" name="foto_ktp" placeholder="Choose image" id="foto_ktp" class="form-control" accept="image/jpeg, image/png">
                        @if(empty($data->foto_ktp) || is_null($data->foto_ktp))
                        <img id="preview-image-before-upload" src="{{ asset('images/png/notfound.gif')}}" alt="preview image" style="max-height: 250px;">
                        @else
                        <img id="preview-image-before-upload" src="{{ $data->preview_ktp }}" alt="preview image" style="max-height: 250px; max-width: 400px;">
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Foto Penerima</label>
                        <input type="file" name="foto_penerima" placeholder="Choose image" id="foto_penerima" class="form-control" accept="image/jpeg, image/png">
                        @if(empty($data->foto_penerima) || is_null($data->foto_penerima))
                        <img id="preview-image-before-upload2" src="{{ asset('images/png/notfound.gif')}}" alt="preview image" style="max-height: 250px;">
                        @else
                        <img id="preview-image-before-upload2" src="{{ $data->preview_penerima }}" alt="preview image" style="max-height: 250px; max-width: 400px;">
                        @endif
                    </div>
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

@push('js')
<script>
    $('#provinsi').change(function() {
       var kabupaten = $(this).val();
           $.ajax({
               type: "GET",
               url: "{{ route('kabupaten') }}?kabupaten=" + kabupaten,
               success: function(res) {
                    $("#kabupaten").empty();
                    $("#kabupaten").append('<option value="">Pilih Kabupaten</option>');
                    $.each(res, function(key, value) {
                        $("#kabupaten").append('<option value="' + key + '">' + value +
                            '</option>');
                    });
                }
           });
    });
    $('#kabupaten').change(function() {
       var kecamatan = $(this).val();
           $.ajax({
               type: "GET",
               url: "{{ route('kecamatan') }}?kecamatan=" + kecamatan,
               success: function(res) {
                    $("#kecamatan").empty();
                    $("#kecamatan").append('<option value="">Pilih Kecamatan</option>');
                    $.each(res, function(key, value) {
                        $("#kecamatan").append('<option value="' + key + '">' + value +
                            '</option>');
                    });
                }
           });
    });
    $('#kecamatan').change(function() {
       var kelurahan = $(this).val();
           $.ajax({
               type: "GET",
               url: "{{ route('kelurahan') }}?kelurahan=" + kelurahan,
               success: function(res) {
                    $("#kelurahan").empty();
                    $("#kelurahan").append('<option value="">Pilih Kelurahan</option>');
                    $.each(res, function(key, value) {
                        $("#kelurahan").append('<option value="' + key + '">' + value +
                            '</option>');
                    });
                }
           });
    });

</script>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('#foto_penerima').change(function() {
            console.log('berubah');
            let reader = new FileReader();

            reader.onload = (e) => {

                $('#preview-image-before-upload2').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });
        $('#foto_ktp').change(function() {
            console.log('berubah');
            let reader = new FileReader();

            reader.onload = (e) => {

                $('#preview-image-before-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });

    });
</script>
@endpush
