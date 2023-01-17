<div>
    <h3 class="mt-3">Komentar ({{ $total_comments }})</h3>
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
       <span class="komentar"> Login dulu untuk berkomentar <a wire:click="$emitTo('registrasi', 'tampilModal')"><b>Klik disini</b></a></span>
    </div>    
    @endguest
    @foreach($comments as $item)
    <div class="mb-3" id="comment-{{ $item->id }}" >
        <div style="background-color:rgba(207, 207, 207, 0.096);border-radius: 25px;">
            <div class="d-flex align-items-start mb-3">
                <img src="{{ asset('trusthand/assets/images/sobo-avatar.png') }}" class="img-fluid rounded-circle mr-2" width="40">
                <div>
                    <div>
                        <span class="komentar"><b>{{ $item->user->name }}</b></span>
                        <span class="waktu">&nbsp;{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->diffForHumans() }}</span>
                    </div>
                    <div class="text-secondary komentar mb-2 ">
                        {{ $item->body }}
                    </div>
                    <div>
                        @auth
                        <button class="btn btn-sm btn-primary komentar" wire:click="selectReply({{ $item->id }})">Balas</button>
                        @if ($item->user_id == Auth::user()->id)
                        <button class="btn btn-sm btn-warning komentar" wire:click="selectEdit({{ $item->id }})">Edit</button>
                        <button class="btn btn-sm btn-danger komentar" wire:click="delete({{ $item->id }})">Hapus</button>
                        @endif
                        @if (isset($item->hasLike))
                        <button wire:click="like({{ $item->id }})" class="btn btn-sm btn-danger komentar">
                            <i class="fa fa-heart me-2"></i>
                            ({{ $item->totalLikes() }})
                        </button>
                        @else
                        <button wire:click="like({{ $item->id }})" class="btn btn-sm btn-secondary komentar">
                            <i class="fa fa-heart me-2"></i>
                            ({{ $item->totalLikes() }})
                        </button>
                        @endif
    
                        @endauth
                    </div>
                    @if (isset($comment_id) && $comment_id == $item->id)
                    <form wire:submit.prevent="reply" class="my-3">
                        <div class="mb-3">
                            <textarea wire:model.defer="body2" rows="2" class="form-control @error('body2') is-invalid @enderror"></textarea>
                            @error('body2')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-primary btn-block mt-3">Submit</button>
                
                        </div>
                    </form>
                    @endif
                    @if (isset($edit_comment_id) && $edit_comment_id == $item->id)
                    <form wire:submit.prevent="change" class="my-3">
                        <div class="mb-3">
                            <textarea wire:model.defer="body2" rows="2" class="form-control @error('body2') is-invalid @enderror"></textarea>
                            @error('body2')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-warning btn-block mt-3">Update</button>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
       
        @if ($item->childrens)
            @foreach ($item->childrens as $item2)
            <div class="ml-4">
                <div class="d-flex align-items-start ml-4" >
                    <img src="{{ asset('trusthand/assets/images/sobo-avatar.png') }}" class="img-fluid rounded-circle me-2" width="40">
                    <div style="background-color:rgba(207, 207, 207, 0.096);border-radius: 10px;">
                        <div class="ml-2 mr-2">
                            <span class="komentar"><b>{{ $item2->user->name }}</b></span>
                            <span class="waktu">&nbsp;{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item2->created_at)->diffForHumans() }}</span>
                        </div>
                        <div class="text-secondary komentar mb-2">
                            {{ $item2->body }}
                        </div>
                        <div>
                            @auth
                            <button class="btn btn-sm btn-primary komentar" wire:click="selectReply({{ $item2->id }})">Balas</button>
                            @if ($item2->user_id == Auth::user()->id)
                            <button class="btn btn-sm btn-warning komentar" wire:click="selectEdit({{ $item2->id }})">Edit</button>
                            <button class="btn btn-sm btn-danger komentar" wire:click="delete({{ $item2->id }})">Hapus</button>
                            @endif
                            @endauth
                        </div>
                    </div>
                </div>
                @if (isset($comment_id) && $comment_id == $item2->id)
                    <form wire:submit.prevent="reply" class="my-3 ml-4">
                        <div class="mb-3">
                            <textarea wire:model.defer="body2" rows="2" class="form-control @error('body2') is-invalid @enderror"></textarea>
                            @error('body2')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-primary btn-block mt-3">Submit</button>
                        </div>
                    </form>
                    @endif
                    @if (isset($edit_comment_id) && $edit_comment_id == $item2->id)
                     <form wire:submit.prevent="change" class="my-3 ml-4">
                         <div class="mb-3">
                             <textarea wire:model.defer="body2" rows="2" class="form-control @error('body2') is-invalid @enderror"></textarea>
                             @error('body2')
                             <div class="invalid-feedback">{{ $message }}</div>
                             @enderror
                             <button type="submit" class="btn btn-warning btn-block mt-3">Update</button>
                         </div>
                     </form>
                @endif
            </div>
            <hr>
            @endforeach
        @endif
    </div>
    @endforeach
</div>


@push('css')
<style>
    .komentar{
        font-size: 12px !important;
    }
    .waktu{
        font-size: 10px !important;
        color: rgb(165, 164, 164);
    }
</style>
@endpush

@push('js')

<script>
     Livewire.on('postAdded', commentId => {
        alert("devan asu");
           var helloScroll = document.getElementById('comment-'+ commentId);
           helloScroll.scrollIntoView({behavior: 'smooth'}, true);
        })
</script>
@endpush
