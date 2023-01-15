<div>
    <h3 class="mt-3">Komentar (0)</h3>
    @auth
    <form wire:submit.prevent="store" class="mb-4">
        <div class="mb-3">
            <textarea wire:model.defer="body" rows="2" class="form-control @error('body') is-invalid @enderror"></textarea>
            @error('body')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary btn-block mt-3">Submit</button>

        </div>
    </form>
    @endauth
    @guest
    <div class="alert alert-primary" role="alert">
        Login dulu untuk berkomentar <a wire:click="$emitTo('registrasi', 'tampilModal')"><br><b>Klik disini</b></a>
    </div>    
    @endguest
    {{-- @foreach --}}
    <div class="mb-3">
        <div class="d-flex justify-content-start mb-3">
            <img src="" alt="">
            <div>
                <div>
                    <span>devan</span>
                    <span>12 juni 2023</span>
                </div>
                <div class="text-secondary mb-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam at fugit ut laudantium perspiciatis eaque, vitae, optio natus commodi non laboriosam doloremque vel labore ex alias dicta? Possimus, veniam officiis!
                </div>
                <div>
                    @auth
                    <button class="btn btn-sm btn-primary">Balas</button>
                    <button class="btn btn-sm btn-warning">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                    @endauth
                </div>
            </div>
        </div>

    </div>
    {{-- @endforeach --}}
</div>
