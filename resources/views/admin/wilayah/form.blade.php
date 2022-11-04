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

            @if(Request::segment(3) == 'create' )

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group mt-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="mybutton" onclick="change()"><i
                                        class="feather icon-eye"></i></span>
                            </div>
                            <input name="password" type="password" class="form-control" id="pass" placeholder="Password"
                                required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <div class="input-group mt-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="mybutton2" onclick="change2()"><i
                                        class="feather icon-eye"></i></span>
                            </div>
                            <input name="password_confirmation" type="password" class="form-control" id="passs"
                                placeholder="Konfirmasi Password" required>
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
<script>
    $('#provinsi').change(function () {
        var kabupaten = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{ route('kabupaten') }}?kabupaten=" + kabupaten,
            success: function (res) {
                $("#kabupaten").empty();
                $("#kabupaten").append('<option>Pilih Kabupaten</option>');
                $.each(res, function (key, value) {
                    $("#kabupaten").append('<option value="' + key + '">' + value +
                        '</option>');
                });
            }
        });
    });
    $('#kabupaten').change(function () {
        var kecamatan = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{ route('kecamatan') }}?kecamatan=" + kecamatan,
            success: function (res) {
                $("#kecamatan").empty();
                $("#kecamatan").append('<option>Pilih Kecamatan</option>');
                $.each(res, function (key, value) {
                    $("#kecamatan").append('<option value="' + key + '">' + value +
                        '</option>');
                });
            }
        });
    });
    $('#kecamatan').change(function () {
        var kelurahan = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{ route('kelurahan') }}?kelurahan=" + kelurahan,
            success: function (res) {
                $("#kelurahan").empty();
                $("#kelurahan").append('<option>Pilih Kelurahan</option>');
                $.each(res, function (key, value) {
                    $("#kelurahan").append('<option value="' + key + '">' + value +
                        '</option>');
                });
            }
        });
    });

</script>
@endpush