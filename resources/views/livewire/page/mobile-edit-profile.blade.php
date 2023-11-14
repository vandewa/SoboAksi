<div>
    <div class="container" style="margin-bottom: 120px;">
        <div class="row">
            <div class="col-md-6">
                <div class="myLeftCtn">
                    <center><img src="{{ asset('trusthand/assets/images/sobo-avatar.png') }}" alt=""
                            class="avatar">
                    </center>
                    <form class="myForm text-center">
                        <div class="form-group" style="margin-right:4px;">
                            <i class="fas fa-user"></i>
                            <input class="myInput" type="text" wire:model="nama" placeholder="Nama" id="username"
                                required>
                        </div>

                        <div class="form-group">
                            <i class="fas fa-envelope"></i>
                            <input class="myInput" wire:model="email" placeholder="Email" type="text" id="email"
                                required>
                        </div>

                        <div class="form-group">
                            <i class="fas fa-address-card"></i>
                            <input class="myInput" wire:model="nik" placeholder="Nik" type="text" id="nik"
                                required>
                        </div>
                        <div class="form-group">
                            <i class="fas fa-phone"></i>
                            <input class="myInput" wire:model="nomor_hp" placeholder="Nomor WhatsApp" type="text"
                                id="nomor_hp" required>
                        </div>
                        <div class="form-group">
                            <i class="fas fa-restroom"></i>
                            <select class="myInput" wire:model="jKel">
                                <option disabled>Pilih Jenis Kelamin</option>
                                @foreach (get_code_group('JENIS_KELAMIN_ST') as $key => $value)
                                    <option value="{{ $key }}" {{ $key == $jKel ? 'selected' : '' }}>
                                        {{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <i class="fas fa-user-tie"></i>
                            <select class="myInput" wire:model="pekerjaan_st">
                                <option disabled>Pilih Pekerjaan</option>
                                @foreach (get_code_group('PEKERJAAN_ST') as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <i class="fas fa-building"></i>
                            <select wire:model="selectedProv" class="myInput">
                                <option value="">Pilih Provinsi</option>
                                @foreach ($provinsi as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                            {{ $region_prop }}
                            @if ($region_prop)
                                ada
                            @endif
                        </div>
                        <div class="form-group">
                            <i class="fas fa-house-damage"></i>
                            <select wire:model="selectedKab" class="myInput" name="city_id">
                                <option value="">Pilih Kabupaten</option>
                                @foreach ($kabupaten ?? [] as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}
                                    </option>
                                @endforeach
                            </select>
                            {{ $selectedKab }}
                        </div>
                        <div class="form-group">
                            <i class="fas fa-city"></i>
                            <select wire:model="selectedKec" class="myInput" name="city_id">
                                <option value="">Pilih Kecamatan</option>
                                @foreach ($kecamatan ?? [] as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}
                                    </option>
                                @endforeach
                            </select>
                            {{ $selectedKec }}
                        </div>
                        <div class="form-group">
                            <i class="fas fa-university"></i>
                            <select wire:model="selectedKel" class="myInput" name="city_id">
                                <option value="">Pilih Kelurahan</option>
                                @foreach ($kelurahan ?? [] as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}
                                    </option>
                                @endforeach
                            </select>
                            {{ $selectedKel }}
                        </div>


                        <div class="form-group">
                            <i class="fas fa-home"></i>
                            <input class="myInput" wire:model="alamat" placeholder="Alamat" type="text"
                                id="alamat" required>
                        </div>
                        <input type="submit" wire:click="editProfile" class="butt mt-4" value="Simpan"
                            style="width: 100%;">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if (is_mobile())
        <livewire:page.footer />
    @endif
</div>
