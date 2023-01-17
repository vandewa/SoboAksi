<section class="cause-section sec-pad">
    <div class="shape">
        <div class="shape-1" style="background-image: url({{ asset('trusthand/assets/images/shape/shape-3.png')}});"></div>
        <div class="shape-2" style="background-image: url({{ asset('trusthand/assets/images/shape/shape-4.png')}});"></div>
    </div>

   {{-- START MOBILE --}}
    <div class="auto-container">
        <div class="sec-title centred mb_50">
            <span class="sub-title">Donasi</span><br>
            @if ($kategori)
            <span>Kategori: {{ $aksi->kategorinya->nama_kategori??'' }} ({{ $jumlah??"0" }})</span>
            @endif
        </div>

        <div class="row clearfix">
            @foreach ($item as $index => $ak)
                <livewire:page.mobile-list-card-donasi :data="$ak" :wire:key="$ak['id']"/>
            @endforeach
        </div>
        @if($hasMorePages)
            <div class="load-more">
            <a href="javascript:void(0);" wire:click="loadPosts">Lihat Selanjutnya</span>
            </div>
        @endif
    </div>
    <livewire:page.footer/>
    {{-- END MOBILE --}}

</section>
