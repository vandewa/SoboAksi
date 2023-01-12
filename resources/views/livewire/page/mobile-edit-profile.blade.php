<div class="container mb-5 ">
    <div class="row">
        <div class="col-md-6">
            <div class="myLeftCtn"> 
                <center><img src="{{ asset('trusthand/assets/images/sobo-avatar.png') }}" alt="" class="avatar"></center>
                <form class="myForm text-center">
                    <div class="form-group" style="margin-right:4px;">
                        <i class="fas fa-user"></i>
                        <input class="myInput" type="text" wire:model="nama" placeholder="Nama" id="username" required > 
                    </div>

                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <input class="myInput" wire:model="email" placeholder="Email" type="text" id="email" required> 
                    </div>

                    <input type="submit" wire:click="editProfile" class="butt mt-4" value="Simpan">
                </form>
            </div>
        </div> 
    </div>     
</div>

<livewire:page.footer/>
