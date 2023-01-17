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
                    <div class="form-group">
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
                            <option value="{{ $key }}" @selected($key==$pekerjaan_st)>{{
                                $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-phone"></i>
                        <select wire:model="selectedProv" class="myInput">
                            <option disabled>Pilih Provinsi</option>
                            @foreach($provinsi as $key => $value)
                            <option value="{{ $key }}" {{ ($key==$region_prop) ? 'selected' : '' }}>{{
                                $value }}</option>
                            @endforeach
                        </select>
                        {{ $selectedProv }}
                        @if($region_prop)
                        ada
                        @endif
                    </div>
                    <div class="form-group">
                        <i class="fas fa-phone"></i>
                        <select wire:model="selectedKab" class="myInput" name="city_id">
                            <option disabled>Pilih Kabupaten</option>
                            @foreach($kabupaten??[] as $key => $value)
                            <option value="{{ $key }}" {{ ($key==$region_kab) ? 'selected' : '' }}>{{ $value }}</option>
                            @endforeach
                        </select>
                        {{ $selectedKab }}
                    </div>
                    <div class="form-group">
                        <i class="fas fa-phone"></i>
                        <select wire:model="selectedKec" class="myInput" name="city_id">
                            <option disabled>Pilih Kecamatan</option>
                            @foreach($kecamatan??[] as $key => $value)
                            <option value="{{ $key }}" {{ ($key==$region_kec) ? 'selected' : '' }}>{{ $value }}</option>
                            @endforeach
                        </select>
                        {{ $selectedKec }}
                    </div>
                    <div class="form-group">
                        <i class="fas fa-phone"></i>
                        <select wire:model="selectedKel" class="myInput" name="city_id">
                            <option disabled>Pilih Kelurahan</option>
                            @foreach($kelurahan??[] as $key => $value)
                            <option value="{{ $key }}" {{ ($key==$region_kel) ? 'selected' : '' }}>{{ $value }}</option>
                            @endforeach
                        </select>
                        {{ $selectedKel }}
                    </div>

                    <!-- <div class="form-group">
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
                    </div> -->
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