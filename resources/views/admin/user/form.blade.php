<div class="form-body">
    <h4 class="form-section"><i class="fa fa-user-secret"></i> Management User</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Role</label>
                        @if(Request::segment(3) == 'create' )
                            {!! Form::select('roles[]', $roles,[], array('class' => 'select2 form-control','multiple')) !!}
                        @else
                            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'select2 form-control','multiple')) !!}
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email' ]) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nomor WhatsApp</label>
                        {!! Form::number('nomor_hp', null, ['class' => 'form-control', 'placeholder' => 'Masukkan WhatsApp']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>NIK</label>
                        {!! Form::number('nik', null, ['class' => 'form-control', 'placeholder' => 'Masukkan NIK']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        {{Form::select('jenis_kelamin_st', get_code_group('JENIS_KELAMIN_ST'), null, ['class' => 'form-control', 'placeholder' => 'Pilih Jenis Kelamin'])}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        {!! Form::date('tgl_lahir', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        {{Form::select('pekerjaan_st', get_code_group('PEKERJAAN_ST'), null, ['class' => 'form-control select2', 'placeholder' => 'Pilih Pekerjaan'])}}
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
                            {{Form::select('region_kec',[], null, ['class' => 'form-control select2', 'placeholder' => 'Pilih Kecamatan', 'id' => 'Kecamatan'])}}
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
            </div>

            @if(Request::segment(3) == 'create' )

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group mt-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="mybutton" onclick="change()"><i class="feather icon-eye"></i></span>
                            </div>
                            <input name="password" type="password" class="form-control" id="pass" placeholder="Password" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <div class="input-group mt-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text"id="mybutton2" onclick="change2()"><i class="feather icon-eye"></i></span>
                            </div>
                            <input name="password_confirmation" type="password" class="form-control" id="passs" placeholder="Konfirmasi Password" required>
                        </div>
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

@push('js')
<script>
    $('#provinsi').change(function() {
       var kabupaten = $(this).val();
           $.ajax({
               type: "GET",
               url: "{{ route('kabupaten') }}?kabupaten=" + kabupaten,
               success: function(res) {
                    $("#kabupaten").empty();
                    $("#kabupaten").append('<option>Pilih Kabupaten</option>');
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
                    $("#kecamatan").append('<option>Pilih Kecamatan</option>');
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
                    $("#kelurahan").append('<option>Pilih Kelurahan</option>');
                    $.each(res, function(key, value) {
                        $("#kelurahan").append('<option value="' + key + '">' + value +
                            '</option>');
                    });  
                }
           });
    });

</script>
@endpush