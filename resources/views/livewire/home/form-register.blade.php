<div>
    <div class="title-text centred">
        <h2>Registrasi</h2>
    </div>
    <form action="#" method="post" class="default-form" wire:submit.prevent="simpan">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 donate-form">
                <div class="form-inner">
                    <!-- <h3>Pendaftaran</h3> -->
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                            <div class="form-group">
                                <label>Nama <span>*</span></label>
                                <input type="text" name="name" placeholder="example name" required="" wire:model.lazy="name">
                                @error('name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                            <div class="form-group">
                                <label>Alamat Email <span>*</span></label>
                                <input type="email" name="email" required="" wire:model.lazy="email">
                                @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                            <div class="form-group">
                                <label>Nomor HP <span>*</span></label>
                                <input type="text" name="nomor_hp" required="" wire:model.lazy="nomor_hp">
                                @error('nomor_hp') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                            <div class="form-group">
                                <label>Tanggal Lahir <span>*</span></label>
                                <input type="date" name="tgl_lahir" required="" wire:model.lazy="tgl_lahir">
                                @error('tgl_lahir') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" required="" wire:model.lazy="password">
                                @error('password') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" required=""
                                    wire:model.lazy="password_confirmation">
                                @error('password_confirmation') <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 column text-center">
                            <div class="form-group message-btn">
                                <div class="tombol d-flex justify-content-center btn-block">
                                    <button type="submit" class="butt mb-2" style="line-height:25px !important;">Registrasi</button>
                                </div>
                                <p>Sudah punya akun? <a href="#" wire:click="$emitTo('registrasi', 'register')">Login
                                        sekarang</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>