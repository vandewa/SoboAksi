<div>
    <div id="registrasi-popup" class="donate-popup {{$modal ? "popup-visible": ""}}">
        <div class="close-donate" wire:click="tampilModal" style="top: 25px !important;"><i class="fal fa-times"></i></div>
        <div class="popup-inner">
            <div class="donate-content" style="margin-top: 80px !important;">
                @if($registrasi)
                    <livewire:home.form-register/>
                @else
                    <livewire:home.login/>
                @endif
            </div>
        </div>
    </div>
</div>

