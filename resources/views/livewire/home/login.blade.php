<form method="POST" action="{{ !$lupa ? route('userlogin') : 'lupa.html' }}" class="default-form">
    @csrf
    <div class="row clearfix">
        @if(!$lupa)
        <div class="col-lg-6 col-md-12 col-sm-12 donate-column">
            <div class="title-text centred">
                <h2>Login</h2>
            </div>
            <div class="form-inner">
                <!-- <h3>Login</h3> -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 column">
                        <div class="form-group">
                            <label>Username / Email <span>*</span></label>
                            <input type="text" name="email" required="">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 column">
                        <div class="form-group">
                            <label>Password <span>*</span></label>
                            <input type="password" name="password" required="">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 column text-center">
                        <div class="form-group message-btn">
                            <button type="submit" class="theme-btn-one">Login</button>
                            <p>Belum punya akun? <a href="#" wire:click="$emitTo('registrasi', 'register')">Registrasi
                                    Sekarang</a></p>
                            <p><a href="#" wire:click="lupaPassword">Lupa Password</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($lupa)
        <div class="col-lg-6 col-md-12 col-sm-12 donate-column">
            <div class="title-text centred">
                <h2>Lupa Password</h2>
            </div>
            <div class="form-inner">
                <!-- <h3>Lupa Password</h3> -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 column">
                        <div class="form-group">
                            <label>Email Anda <span>*</span></label>
                            <input type="text" name="name" required="">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 column text-center">
                        <div class="form-group message-btn">
                            <button type="button" class="theme-btn-two btn-warning"
                                wire:click="lupaPassword">Batal</button>
                            <button type="submit" class="theme-btn-one btn-primary">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</form>