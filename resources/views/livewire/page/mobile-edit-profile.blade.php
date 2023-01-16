<div class="container mb-5 ">
    <div class="row">
        <div class="col-md-6">
            <div class="myLeftCtn">
                <center><img src="{{ asset('trusthand/assets/images/sobo-avatar.png') }}" alt="" class="avatar">
                </center>
                <form class="myForm text-center">
                    <div class="form-group" style="margin-right:4px;">
                        <i class="fas fa-user"></i>
                        <input class="myInput" type="text" wire:model="nama" placeholder="Nama" id="username" required>
                    </div>

                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <input class="myInput" wire:model="email" placeholder="Email" type="text" id="email" required>
                    </div>

                    <div class="form-group">
                        <i class="fas fa-address-card"></i>
                        <input class="myInput" wire:model="nik" placeholder="Nik" type="text" id="nik" required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-phone"></i>
                        <input class="myInput" wire:model="nomor_hp" placeholder="Nomor WhatsApp" type="text"
                            id="nomor_hp" required>
                    </div>
                    <!-- <div class="form-group">
                        <i class="fas fa-phone"></i>
                        <select class="myInput" wire:model="jKel">
                            <option disabled>Pilih Jenis Kelamin</option>
                            @foreach(get_code_group('JENIS_KELAMIN_ST') as $key => $value)
                            <option value="{{ $key }}" {{ ($key==$jKel) ? 'selected' : '' }}>{{
                                $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-phone"></i>
                        <select class="myInput" wire:model="pekerjaan_st">
                            <option disabled>Pilih Pekerjaan</option>
                            @foreach(get_code_group('PEKERJAAN_ST') as $key => $value)
                            <option value="{{ $key }}" {{ ( $key==$pekerjaan_st) ? 'selected' : '' }}>{{
                                $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-phone"></i>
                        <select wire:model="selectedProv" class="myInput">
                            <option disabled>Pilih Provinsi</option>
                            @foreach(get_prov() as $key => $value)
                            <option value="{{ $key }}" {{ ($key==$region_prop) ? 'selected' : '' }}>{{
                                $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-phone"></i>
                        <select class="myInput" name="city_id">
                            <option disabled>Choose city</option>
                            @foreach($kabupaten as $key => $value)
                            <option value="{{ $key }}" {{ ($key==$region_kab) ? 'selected' : '' }}>{{ $value }}</option>
                            @endforeach
                        </select>
                    </div> -->
                    <div class="form-group">
                        <i class="fas fa-phone"></i>
                        {{Form::select('jKel', get_code_group('JENIS_KELAMIN_ST'), null, ['wire:model' =>
                        'jKel', 'class' =>
                        'myInput', 'placeholder' => 'Pilih Jenis Kelamin'])}}
                    </div>
                    <div class="form-group">
                        <i class="fas fa-phone"></i>

                        {{Form::select('pekerjaan_st', get_code_group('PEKERJAAN_ST'), null, ['wire:model' =>
                        'pekerjaan_st', 'class' => 'myInput
                        select2', 'placeholder' => 'Pilih Pekerjaan'])}}
                    </div>
                    <div class="form-group">
                        <i class="fas fa-phone"></i>
                        {{Form::select('region_prop', get_prov(), null, ['wire:model' =>
                        'region_prop', 'class' => 'myInput select2',
                        'placeholder' => 'Pilih Provinsi', 'id' => 'provinsi'])}}
                    </div>
                    <div class="form-group">
                        <i class="fas fa-phone"></i>
                        {{Form::select('region_kab', get_kab($data->region_prop), $kabupaten, ['wire:model' =>
                        'region_kab', 'class' => 'myInput
                        select2', 'placeholder' => 'Pilih Kabupaten','id' => 'kabupaten'])}}
                    </div>
                    <div class="form-group">
                        <i class="fas fa-phone"></i>
                        {{Form::select('region_kec', get_kec($data->region_kab), $kecamatan, ['wire:model' =>
                        'region_kec','class' => 'myInput
                        select2', 'placeholder' => 'Pilih Kecamatan','id' => 'kecamatan'])}}
                    </div>
                    <div class="form-group">
                        <i class="fas fa-phone"></i>
                        {{Form::select('region_kel', get_kel($data->region_kec), $kelurahan, ['wire:model' =>
                        'region_kel','class' => 'myInput
                        select2', 'placeholder' => 'Pilih Kelurahan', 'id' => 'kelurahan'])}}
                    </div>
                    <div class="form-group">
                        <i class="fas fa-home"></i>
                        <input class="myInput" wire:model="alamat" placeholder="Alamat" type="text" id="alamat"
                            required>
                    </div>
                    <input type="submit" wire:click="editProfile" class="butt mt-4" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</div>

<livewire:page.footer />
@push('js')
<script>
    $('#provinsi').change(function () {
        var kabupaten = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{ route('kabupaten') }}?kabupaten=" + kabupaten,
            success: function (res) {
                $("#kabupaten").empty();
                $("#kabupaten").append('<option value="">Pilih Kabupaten</option>');
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
                $("#kecamatan").append('<option value="">Pilih Kecamatan</option>');
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
                $("#kelurahan").append('<option value="">Pilih Kelurahan</option>');
                $.each(res, function (key, value) {
                    $("#kelurahan").append('<option value="' + key + '">' + value +
                        '</option>');
                });
            }
        });
    });

</script>
@endpush