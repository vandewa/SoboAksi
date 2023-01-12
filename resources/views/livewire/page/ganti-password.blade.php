<div class="container mb-5 ">
    <a href="{{ url()->previous() }}">
        <div class="round"><i class="fa fa-arrow-left" aria-hidden="true" style="height:10px !important;"></i></div>
    </a>    
    
    <div class="row">
        <div class="col-md-6">
            <div class="myLeftCtn"> 
                <center><img src="{{ asset('trusthand/assets/images/sobo-avatar.png') }}" alt="" class="avatar"></center>
                <form class="myForm text-center">

                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input class="myInput" type="password" wire:model="password" id="password" placeholder="Password Baru" required> 
                    </div>

                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input class="myInput" type="password" id="password2" placeholder="Konfirmasi Password" required> 
                    </div>

                    <input type="submit" wire:click="gantiPassword" class="butt mt-4" value="Simpan">
                    
                </form>
            </div>
        </div> 
    </div>     
</div>
<livewire:page.footer/>
