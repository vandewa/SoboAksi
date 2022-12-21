<div class="title-text centred">
    <h2>Registrasi</h2>
</div>
<form action="trusthand/index.html" method="post" class="default-form">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 donate-form">
            <div class="form-inner">
                <h3>Donar Information</h3>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                        <div class="form-group">
                            <label>Your Name <span>*</span></label>
                            <input type="text" name="name" placeholder="example name" required="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                        <div class="form-group">
                            <label>Email Address <span>*</span></label>
                            <input type="email" name="email" required="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" required="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" required="">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 column">
                        <div class="form-group">
                            <label class="custom-control material-checkbox">
                                <input type="checkbox" class="material-control-input">
                                <span class="material-control-indicator"></span>
                                <span class="description">I would like to donate automatically repeat each month</span>
                            </label>
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
