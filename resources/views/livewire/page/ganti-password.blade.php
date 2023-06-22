<div>
     {{-- START MOBILE --}}
     <div class="d-block d-md-none">
        <div class="container mb-5 ">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn"> 
                        <center><img src="{{ asset('trusthand/assets/images/sobo-avatar.png') }}" alt="" class="avatar"></center>
                        <form class="myForm text-center" wire:submit.prevent="gantiPassword">
        
                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input class="myInput" type="password" wire:model.lazy="password" id="password" placeholder="Password Baru" required> 
                                @error('password') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
        
                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input class="myInput" type="password" id="password2" wire:model.lazy="password_confirmation" placeholder="Konfirmasi Password" required> 
                                @error('password_confirmation') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
        
                            <input type="submit" class="butt mt-4" value="Update" style="width: 100%;">
                            
                        </form>
                    </div>
                </div> 
            </div>     
        </div>
        <livewire:page.footer/>
    </div>
     {{-- START DESKTOP --}}
     <div class="d-none d-md-block">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="myLeftCtn"> 
                        <form class="myForm text-center" wire:submit.prevent="gantiPassword">
                            <div class="form-group">
                                <input class="myInput" type="password" wire:model.lazy="password" id="password" placeholder="Password Baru" required> 
                                @error('password') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
        
                            <div class="form-group">
                            
                                <input class="myInput" type="password" id="password2" wire:model.lazy="password_confirmation" placeholder="Konfirmasi Password" required> 
                                @error('password_confirmation') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
        
                            <input type="submit" class="butt mt-4" value="Update" style="width: 100%;">
                            
                        </form>
                    </div>
                </div> 
            </div>     
        </div>
    </div>
</div>

