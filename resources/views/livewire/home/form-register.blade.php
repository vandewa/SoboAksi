<div class="title-text centred">
    <h2>Registrasi</h2>
</div>
<form action="trusthand/index.html" method="post" class="default-form">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 donate-form">
            <div class="form-inner">
                <h3>Pendaftaran</h3>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                        <div class="form-group">
                            <label>Nama <span>*</span></label>
                            <input type="text" name="name" placeholder="example name" required="" wire:model="name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                        <div class="form-group">
                            <label>Alamat Email <span>*</span></label>
                            <input type="email" name="email" required=""  wire:model="email">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                        <div class="form-group">
                            <label>Nomor HP <span>*</span></label>
                            <input type="text" name="hp" required=""  wire:model="nomor_hp">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                        <div class="form-group">
                            <label>Tanggal Lahir <span>*</span></label>
                            <input type="date" name="tgl_lahir" required=""  wire:model="tgl_lahir">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="phone" required=""  wire:model="password">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                        <div class="form-group">
                            <label>Konfirmasi Password</label>
                            <input type="password" name="phone" required="" wire:model="password_confirmation">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 column">
                        <div class="form-group message-btn">
                            <button type="submit" class="theme-btn-one">Registrasi</button>
                            <p>Sudah punya akun <a href="#" wire:click="$emitTo('registrasi', 'register')">Login sekarang</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
