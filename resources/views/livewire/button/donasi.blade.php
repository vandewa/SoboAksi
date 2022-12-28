<div>
    @if(Auth::check())
    <button class="donate-box-btn theme-btn-one" wire:click="$emitTo('donate-popup', 'tampilModal')"><span>Mari Beraksi</span></button>
    @else
    <button class="donate-box-btn theme-btn-one"
        wire:click="$emitTo('registrasi', 'tampilModal')"><span>Login</span></button>
    @endif
</div>
