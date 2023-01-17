{{-- START DESKTOP --}}
<div>
{{-- <div class="d-none d-md-block">
    <!-- Page Title -->
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url({{ $sampul }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>{{ $datanya->judul }}</h1>
            </div>
        </div>
    </section>
    <!-- End Page Title -->
    <section class="cause-details">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="cause-details-content">
                        <div class="cause-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ $sampul }}" alt=""></figure>
                                    <div class="category"><a href="causes-details.html">{{ $datanya->kategorinya->nama_kategori??"" }}</a></div>
                                </div>
                                @if($datanya->penerimaDonasi)
                                    <div class="lower-content">
                                        <div class="progress-box">
                                            <div class="bar">
                                                <div class="bar-inner count-bar" style="width: {{ ($datanya->penerimaDonasi->donasi_tercapai??0)/($datanya->penerimaDonasi->target_donasi??0)*100 }}%;"><div class="count-text">{{ ($datanya->penerimaDonasi->donasi_tercapai??0)/($datanya->penerimaDonasi->target_donasi??0)*100 }}%</div></div>
                                            </div>
                                            <div class="donate-text">
                                                <h6><span>Rp {{ $datanya->penerimaDonasi->donasi_tercapai??0 }}</span> Raised</h6>
                                                <h6><span>Rp {{ $datanya->penerimaDonasi->target_donasi??0 }}</span> Target</h6>
                                            </div>
                                        </div>
                                        <div class="btn-box">
                                            <button class="donate-box-btn theme-btn-one" wire:click="$emitTo('donate-form', 'tampilModal',  {{ $datanya->id }})"><span>Donate Now</span></button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="content-one">
                            <div class="text" style="text-align:justify; text-justify:auto;text-indent: 40px;  color:black;">
                               <p>{!! $datanya->deskripsi !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="default-sidebar cause-sidebar ml_20">
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Kategori</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    @foreach ($kategoris as $kategori)
                                    <li><a href="causes-details.html">{{ $kategori->nama_kategori }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="donate-widget">
                            @php
                                if($donasi->sampul->url??"" != ''){
                                    $devan = asset('storage/'.$donasi->sampul->url);
                                } else {
                                    $devan = asset('trusthand/assets/images/resource/cause-1.jpg');
                                }
                            @endphp
                            <div class="inner-box" style="background-image: url({{ $devan }});">
                                <div class="icon-box"><img src="{{ $devan }}" alt=""></div>
                                <h3>{{ $donasi->judul??"" }}</h3>
                                <button class="donate-box-btn theme-btn-one" wire:click="$emitTo('donate-form', 'tampilModal', {{ $datanya->id }})"><span>Donate Now</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cause-details end -->
</div> --}}
{{-- END DESKTOP --}}

{{-- START MOBILE --}}
<div class="">
    <section class="cause-details" style="margin-top: 0px;margin-bottom: 40px;">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side" >
                    <div class="cause-details-content" >
                        <div class="cause-block-one" >
                            <div class="inner-box" >
                                <div class="image-box mb-4">
                                    <figure class="image"><img src="{{ $sampul }}" ></figure>
                                </div>
                                <div class="container mb-3">
                                    <h1 style="font-size: 20px;">{{ $datanya->judul }}</h1>
                                    <a href="{{ route('aksi', ['kategori' => $datanya->kategori]) }}"><span style="font-size: 13px; color:#E04237 !important;">{{ $datanya->kategorinya->nama_kategori }}</span>
                                    </a>
                                </div>

                                <div class="row">
                                    <div class="col-4" style="max-width: 20% !important;">
                                        <img src="{{ asset('trusthand/assets/images/sobo-avatar.png') }}" alt="" class="avatar">
                                    </div>
                                    <div class="col-8" style="padding-left:0px !important;">
                                        <span style="font-size: 13px;" class="brsmall">by {{ $datanya->user->name??'' }}</span>
                                        @if($datanya->publish_at)
                                        <span style="font-size: 10px;">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $datanya->publish_at)->diffForHumans() }}</span>
                                        @endif
                                    </div>
                                </div>
                                @if($datanya->penerimaDonasi)
                                    <div class="progress-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" style="width: {{ ($datanya->penerimaDonasi->donasi_tercapai??0)/($datanya->penerimaDonasi->target_donasi??0)*100 }}%;"><div class="count-text">{{ ($datanya->penerimaDonasi->donasi_tercapai??0)/($datanya->penerimaDonasi->target_donasi??0)*100 }}%</div></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <h6><span><b>Rp {{ $datanya->penerimaDonasi->donasi_tercapai??0 }}</b></span>
                                                    <br> Diperoleh
                                                </h6>
                                            </div>
                                            <div class="col-6">
                                                <h6><span><b>Rp {{ $datanya->penerimaDonasi->target_donasi??0 }}</b></span>
                                                    <br> Target
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="content-one">
                            <div class="text" style="text-align:justify; text-justify:auto;text-indent: 40px;  color:black;">
                               <p>{!! $datanya->deskripsi !!}</p>
                            </div>
                        </div>
                        <div>
                        <livewire:page.komentar :idnya="$datanya->id" :wire:key="'listkomentar'.$datanya->id">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if($datanya->penerimaDonasi)
        @if (Auth::check())
        <div class="donasi-bottom"> 
            <div class="tombol d-flex justify-content-center mt-3">
                <button type="submit" class="butt mb-2" style="line-height:25px !important; margin-bottom: 30px !important;margin-top:5px !important; width:80% !important;" wire:click="$emitTo('donate-form', 'tampilModal', {{ $datanya->id }})"><span>Donasi Sekarang</span>
            </div>
        </div>
        @else
        <div class="donasi-bottom">
            <div class="tombol d-flex justify-content-center mt-3">
                <button wire:click="$emitTo('registrasi', 'tampilModal')" class="butt mb-2" style="line-height:25px !important; margin-bottom: 30px !important;margin-top:5px !important; width:80% !important;">Donasi Sekarang</button>
            </div>
        @endif
    @endif
</div>
</div>
