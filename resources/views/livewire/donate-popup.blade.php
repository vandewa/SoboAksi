<div>
    <div id="registrasi-popup" class="donate-popup {{ $modal ? 'popup-visible' : '' }}">
        <div class="close-donate" wire:click="tampilModal" style="top:20px !important"><i class="fal fa-times"></i></div>
        <div class="popup-inner">
            <div class="d-flex justify-content-center">
                <div class="col-lg-6 col-md-12 col-sm-12 donate-content"
                    style="padding:0px !important; margin-top:60px !important">
                    @if ($isEdit)
                        <form action="" class="form-inner" wire:submit.prevent='update({{ $idnya }})'>
                        @else
                            <form action="" class="form-inner" wire:submit.prevent='simpan'>
                    @endif
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <h3>Tambah Aksi</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Halaman Sampul <span>*</span></label>
                                @if ($photo2)
                                    {{-- <img src="{{ $photo2 }}" width="200px" height="200px"> --}}
                                    <img src="{{ route('helper.show-picture', ['path' => $photo2]) }}" width="200px"
                                        height="200px">
                                @else
                                    @if ($photo)
                                        <img src="{{ $photo->temporaryUrl() }}" width="200px" height="200px">
                                    @endif
                                @endif
                                @if ($isEdit)
                                    <input type="file" wire:model.lazy="photo" accept="image/png, image/jpeg"
                                        class="form-control" placeholder="example name">
                                    @error('photo')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                @else
                                    <input type="file" wire:model.lazy="photo" accept="image/png, image/jpeg"
                                        class="form-control" placeholder="example name" required>
                                    @error('photo')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Judul <span>*</span></label>
                                <input type="text" wire:model.lazy="judul" class="form-control"
                                    placeholder="Nama Aksi" required style="height:35px !important;">
                                @error('judul')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Keterangan <span>*</span></label>
                                <input type="text" wire:model.lazy="keterangan" class="form-control"
                                    placeholder="Keterangan Aksi" required style="height:35px !important;">
                                @error('keterangan')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Kategori <span>*</span></label>
                                <select wire:model.lazy="kategori" class="form-control">
                                    @foreach ($listKategori ?? [] as $listKategori)
                                        <option value="{{ $listKategori->id }}"
                                            wire:key="select-kategori-{{ $listKategori->id }}">
                                            {{ $listKategori->nama_kategori }}</option>
                                    @endforeach
                                </select>
                                @error('kategori')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Deskripsi <span>*</span></label>
                                <livewire:trix :value="$deskripsi">
                            </div>
                            @if (!$isEdit)
                                <div class="form-group">
                                    <p>Apakah anda ingin menggalang dana untuk membantu orang lain? <input
                                            type="checkbox" wire:model="denganPenerima" value="true"> Ya</p>
                                </div>
                            @endif

                        </div>
                        @if ($denganPenerima)
                            <div class="col-md-12">
                                <h3>Penerima Donasi</h3>
                                <div class="form-group">
                                    <label>Nama Penerima <span>*</span></label>
                                    <input type="text" class="form-control" wire:model.lazy="nama"
                                        style="height:35px !important;" required>
                                    @error('nama')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Provinsi <span>*</span></label>
                                    <select wire:change="getKabupaten" wire:model.lazy="region_prop"
                                        class="form-control">
                                        @foreach ($provinsis as $provinsi)
                                            <option value="{{ $provinsi->region_cd }}">
                                                {{ $provinsi->region_nm }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('region_prop')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kabupaten <span>*</span></label>
                                    <select wire:change="getKecamatan" wire:model.lazy="region_kab"
                                        class="form-control">
                                        @foreach ($kabupatens ?? [] as $provinsi)
                                            <option value="{{ $provinsi->region_cd }}">
                                                {{ $provinsi->region_nm }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('region_kab')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kecamatan <span>*</span></label>
                                    <select wire:change="getKelurahan" wire:model.lazy="region_kec"
                                        class="form-control">
                                        @foreach ($kecamatans ?? [] as $provinsi)
                                            <option value="{{ $provinsi->region_cd }}">
                                                {{ $provinsi->region_nm }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('region_kec')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Desa / Kelurahan <span>*</span></label>
                                    <select wire:model.lazy="region_kel" class="form-control">
                                        @foreach ($desas ?? [] as $provinsi)
                                            <option value="{{ $provinsi->region_cd }}">
                                                {{ $provinsi->region_nm }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('region_kel')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat <span>*</span></label>
                                    <textarea rows="3" wire:model.lazy='alamat' class="form-control"></textarea>
                                    @error('alamat')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>No Telepon Penerima <span>*</span></label>
                                    <input type="number" wire:model.lazy="telepon" class="form-control">
                                    @error('telepon')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Identitas <span>*</span></label>
                                    <select wire:model.lazy="kode_identitas" class="form-control">
                                        @foreach ($jenisIdentitas ?? [] as $identitas)
                                            <option value="{{ $identitas->code_cd }}"> {{ $identitas->code_nm }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('kode_identitas')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Foto Identitas <span>*</span></label>
                                    @if ($foto_ktp2)
                                        {{-- <img src="{{ $foto_ktp2 }}" width="200px" height="200px"> --}}
                                        <img src="{{ route('helper.show-picture', ['path' => $foto_ktp2]) }}"
                                            width="200px" height="200px">
                                    @else
                                        @if ($foto_ktp)
                                            <img src="{{ $foto_ktp->temporaryUrl() }}" width="200px"
                                                height="200px">
                                        @endif
                                    @endif
                                    <input type="file" wire:model.lazy="foto_ktp" accept="image/*"
                                        class="form-control">
                                    @error('foto_ktp')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No Identitas <span>*</span></label>
                                    <input type="number" wire:model.lazy="no_identitas" class="form-control">
                                    @error('no_identitas')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Foto Calon Penerima <span>*</span></label>
                                    @if ($foto_penerima2)
                                        {{-- <img src="{{ $foto_penerima2 }}" width="200px" height="200px"> --}}
                                        <img src="{{ route('helper.show-picture', ['path' => $foto_penerima2]) }}"
                                            width="200px" height="200px">
                                    @else
                                        @if ($foto_penerima)
                                            <img src="{{ $foto_penerima->temporaryUrl() }}" width="200px"
                                                height="200px">
                                        @endif
                                    @endif
                                    <input type="file" wire:model.lazy="foto_penerima" accept="image/*"
                                        class="form-control">
                                    @error('foto_penerima')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 d-flex justify-content-center">
                                <h3>Jumlah Donasi</h3>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Target Donasi <span>*</span></label>
                                    <input type="number" wire:model.lazy="target_donasi" class="form-control">
                                    @error('target_donasi')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Batas Pengumpulan <span>*</span></label>
                                    <input type="date" wire:model.lazy="target_waktu" class="form-control"
                                        placeholder="example name" required="">
                                </div>
                                @error('target_waktu')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        @endif

                        <div class="tombol d-flex justify-content-center btn-block mt-3 mb-4">
                            <button type="submit" class="butt"
                                style="line-height:25px !important;">Beraksi</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
