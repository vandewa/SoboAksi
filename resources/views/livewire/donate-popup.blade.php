<div id="registrasi-popup" class="donate-popup {{$modal ? "popup-visible": ""}}">
    <div class="close-donate" wire:click="tampilModal"><i class="fal fa-times"></i></div>
    <div class="popup-inner">
        <div class="donate-content">
            <div class="title-text centred">
                <h2>Tambah Aksi</h2>
            </div>
            <form action="" class="form-inner" wire:submit.prevent='simpan'>
                <div class="row">
                    <h3>Tambah Aksi</h3>
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Halaman Sampul <span>*</span></label>
                                @if ($photo)
                                    <img src="{{ $photo->temporaryUrl() }}"  width="200px" height="200px">
                                @endif
                                <input type="file" wire:model.lazy="photo" accept="image/*" class="form-control" name="name" placeholder="example name" required="">
                            </div>
                            <div class="form-group">
                                <label>Judul <span>*</span></label>
                                <input type="text" wire:model.lazy="judul" class="form-control" name="name" placeholder="example name" required="">
                            </div>
                            <div class="form-group">
                                <label>Kategori <span>*</span></label>
                                <select name="" id="" wire:model.lazy="kategori" class="form-control">
                                    @foreach ($listKategori??[] as $listKategori)
                                        <option value="{{ $listKategori->id }}">{{ $listKategori->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi <span>*</span></label>
                                <textarea name="" wire:model.lazy="deskripsi" id="" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <p>Apakah anda ingin menggalang dana untuk membantu orang lain? <input type="checkbox" wire:change="galangDana"> Ya</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        @if($denganPenerima)
                        <h3>Penerima Donasi</h3>

                            <div class="form-group">
                                <label>Nama Penerima <span>*</span></label>
                                <input type="text" name="" class="form-control" id="" wire:model.lazy="nama">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Provinsi <span>*</span></label>
                                        <select  wire:change="getKabupaten" name="" wire:model.lazy="region_prop" id="" class="form-control">
                                            @foreach ($provinsis as $provinsi )
                                            <option value="{{ $provinsi->region_cd }}">
                                                {{ $provinsi->region_nm }}
                                            </option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kabupaten <span>*</span></label>
                                        <select name="" wire:change="getKecamatan" wire:model.lazy="region_kab" id="" class="form-control">
                                            @foreach ($kabupatens??[] as $provinsi )
                                            <option value="{{ $provinsi->region_cd }}">
                                                {{ $provinsi->region_nm }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kecamatan <span>*</span></label>
                                        <select name="" wire:change="getKelurahan" wire:model.lazy="region_kec" id="" class="form-control">
                                        @foreach ($kecamatans??[] as $provinsi )
                                        <option value="{{ $provinsi->region_cd }}">
                                            {{ $provinsi->region_nm }}
                                        </option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Desa / Kelurahan <span>*</span></label>
                                        <select name="" wire:model.lazy="region_kel" id="" class="form-control">
                                            @foreach ($desas??[] as $provinsi )
                                        <option value="{{ $provinsi->region_cd }}">
                                            {{ $provinsi->region_nm }}
                                        </option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat <span>*</span></label>
                                       <textarea name="" id="" rows="3"  wire:model.lazy='alamat' class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>No Telepon Penerima <span>*</span></label>
                                <select name="" wire:model.lazy="penerima_id" id="" class="form-control">
                                    <option value="">

                                    </option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jenis Identitas <span>*</span></label>
                                        <select name="" wire:model.lazy="penerima_id" id="" class="form-control">
                                            @foreach ($jenisIdentitas??[] as $identitas)
                                            <option value="{{ $identitas->code_cd }}"> {{ $identitas->code_nm }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Identitas <span>*</span></label>
                                        @if ($foto_ktp)
                                            <img src="{{ $foto_ktp->temporaryUrl() }}"  width="200px" height="200px">
                                        @endif
                                        <input type="file" wire:model.lazy="foto_ktp" accept="image/*" name="" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>NO Identitas <span>*</span></label>
                                        <select name="" wire:model.lazy="penerima_id" id="" class="form-control">
                                            <option value="">

                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Calon Penerima <span>*</span></label>
                                        @if ($foto_penerima)
                                        <img src="{{ $foto_penerima->temporaryUrl() }}" width="200px" height="200px">
                                        @endif
                                        <input type="file" name="" wire:model.lazy="foto_penerima" accept="image/*" class="form-control" id="">
                                    </div>
                                </div>
                            </div>
                        <h3>Jumlah Donasi</h3>
                            <div class="form-group">
                                <label>Target Donasi <span>*</span></label>
                                <input type="number" wire:model.lazy="target_donasi" class="form-control" name="" id="">
                            </div>
                            <div class="form-group">
                                <label>Batas Pengumpulan <span>*</span></label>
                                <input type="date" wire:model.lazy="target_waktu" name="name" class="form-control" placeholder="example name" required="">
                            </div>

                        @endif
                        <div class="row">
                            <div class="col-md-12 push-right">
                                <button class="btn btn-primary" type="submit">Beraksi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
