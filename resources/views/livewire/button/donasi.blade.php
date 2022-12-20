<div>
    @if(Auth::check())
        <button class="donate-box-btn theme-btn-one" wire:click="$emitTo('donate-popup', 'tampilModal')"><span>Donasi Sekarang</span></button>
    @else
        <button class="donate-box-btn theme-btn-one" wire:click="$emitTo('registrasi', 'tampilModal')"><span>Registrasi</span></button>
    @endif
</div>
