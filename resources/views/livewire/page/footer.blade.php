<div class="home-bottom">
    <div class="row" style="margin-right: 14px; margin-left: 17px;">
        <div class="col-3" >
            <a href="{{ route('home') }}">
                @if (Request::segment(1) == '' )
                    <img src="{{ asset('trusthand/assets/images/donasi.svg') }}" class="mt-3">
                @else
                    <img src="{{ asset('trusthand/assets/images/donasi-off.svg') }}" class="mt-3">
                @endif
                <span class="brsmall"></span>
                <button style="margin-bottom: 20px !important; margin-top:10px !important; font-size: 10px !important; line-height:10px !important;"><span >Beranda</span>
                </button> 
            </a>
        </div>
        <div class="col-3">
            <a wire:click="$emitTo('donate-popup', 'tampilModal')">
                @if (Request::segment(1) == 'aksi' )
                    <img src="{{ asset('trusthand/assets/images/galang-dana.svg') }}" class="mt-3">
                    @if(Auth::check())
                    <a wire:click="$emitTo('donate-popup', 'tampilModal')">
                        <span class="brsmall"></span>
                        <button style="margin-bottom: 20px !important; margin-top:10px !important; font-size: 10px !important; line-height:10px !important;"><span>Galang Dana</span></button> 
                    </a>
                    @else
                    <a wire:click="$emitTo('registrasi', 'tampilModal')">
                        <span class="brsmall"></span>
                        <button style="margin-bottom: 20px !important; margin-top:10px !important; font-size: 10px !important; line-height:10px !important;"><span>Galang Dana</span></button> 
                    </a>
                    @endif
                @else
                    <img src="{{ asset('trusthand/assets/images/galang-dana-off.svg') }}" class="mt-3">
                    @if(Auth::check())
                    <a wire:click="$emitTo('donate-popup', 'tampilModal')">
                        <span class="brsmall"></span>
                        <button style="margin-bottom: 20px !important; margin-top:10px !important; font-size: 10px !important; line-height:10px !important;"><span>Galang Dana</span></button> 
                    </a>
                    @else
                    <a wire:click="$emitTo('registrasi', 'tampilModal')">
                        <span class="brsmall"></span>
                        <button style="margin-bottom: 20px !important; margin-top:10px !important; font-size: 10px !important; line-height:10px !important;"><span>Galang Dana</span></button> 
                    </a>
                    @endif
                @endif
            </a>
        </div>
        <div class="col-3">
            @if(Auth::check())
            <a href="{{ route('donasiku') }}">
                <img src="{{ asset('trusthand/assets/images/donasi-saya-off.svg') }}" class="mt-3">
                <span class="brsmall"></span>
                <button style="margin-bottom: 20px !important; margin-top:10px !important; font-size: 10px !important; line-height:10px !important;"><span>Donasi Saya</span></button> 
            </a>
            @else
            <a wire:click="$emitTo('registrasi', 'tampilModal')">
                <img src="{{ asset('trusthand/assets/images/donasi-saya-off.svg') }}" class="mt-3">
                <span class="brsmall"></span>
                <button style="margin-bottom: 20px !important; margin-top:10px !important; font-size: 10px !important; line-height:10px !important;"><span>Donasi Saya</span></button> 
            </a>
            @endif
        </div>
        <div class="col-3">
            @if(Auth::check())
            <a href="{{ route('detail-akun') }}">
                <img src="{{ asset('trusthand/assets/images/akun-off.svg') }}" class="mt-3">
                <span class="brsmall"></span>
                <button style="margin-bottom: 20px !important; margin-top:10px !important; font-size: 10px !important; line-height:10px !important;"><span>Akun</span></button> 
            </a>
            @else
            <a wire:click="$emitTo('registrasi', 'tampilModal')">
                <img src="{{ asset('trusthand/assets/images/akun-off.svg') }}" class="mt-3">
                <span class="brsmall"></span>
                <button style="margin-bottom: 20px !important; margin-top:10px !important; font-size: 10px !important; line-height:10px !important;"><span>Akun</span></button> 
            </a>
            @endif
            
        </div>
    </div>
</div>