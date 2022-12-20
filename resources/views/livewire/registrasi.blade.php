<div id="registrasi-popup" class="donate-popup {{$modal ? "popup-visible": ""}}">
    <div class="close-donate" wire:click="tampilModal"><i class="fal fa-times"></i></div>
    <div class="popup-inner">
        <div class="donate-content">
            @if($registrasi)
                <livewire:home.form-register/>
            @else
                <livewire:home.login/>
            @endif
        </div>
    </div>
</div>
