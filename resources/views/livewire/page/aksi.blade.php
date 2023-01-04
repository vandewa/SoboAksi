<section class="cause-section sec-pad">
    <div class="shape">
        <div class="shape-1" style="background-image: url({{ asset('trusthand/assets/images/shape/shape-3.png')}});"></div>
        <div class="shape-2" style="background-image: url({{ asset('trusthand/assets/images/shape/shape-4.png')}});"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title centred mb_50">
            <span class="sub-title">Penggalangan Dana</span>
            <h2>Penggalangan Dana Mendesak</h2>
        </div>
         <div class="row clearfix">
           
        @foreach ($item as $index => $ak)
            <livewire:global.card-donasi :data="$ak" :wire:key="$ak['id']"/>
        @endforeach
                  
        </div>
        @if($hasMorePages)
            <div class="load-more">
            <a href="javascript:void(0);" wire:click="loadPosts">Lihat Selanjutnya</span>
            </div>
        @endif
    </div>
</section>
