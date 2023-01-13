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
                        <i class="fas fa-home"></i>
                        <input class="myInput" wire:model="alamat" placeholder="Alamat" type="text" id="alamat"
                            required>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-phone"></i>
                        <select name="" id="" wire:model.lazy="kategori" class="form-control">
                            @foreach ($listKategori??[] as $listKategori)
                            <option value="{{ $listKategori->id }}">{{ $listKategori->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="submit" wire:click="editProfile" class="butt mt-4" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</div>

<livewire:page.footer />