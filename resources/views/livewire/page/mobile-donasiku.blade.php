<div>
    {{-- START MOBILE --}}
    <div class="d-block d-md-none">
        <div class="kiri">
            <p style="font-size: 18px; color:black;"><b>Donasiku ({{ $jumlah }})</b></p>
        </div>

        <div class="container mt-3" style="margin-bottom: 100px;">
            @foreach ($data as $devan)
                <a href="{{ route('detail-donasi', $devan->aksi->id ?? '') }}" wire:key="donasi-saya-{{ $devan->id }}">
                    <div class="card mb-3" style="max-width: 540px;border-radius: 2%;">
                        <div class="row no-gutters mt-3 ml-3 mr-3 mb-3">
                            <div class="col-4">
                                <a href="{{ route('detail-donasi', $devan->aksi->id ?? '') }}">
                                    <img src="{{ $devan->aksi->sampul->url_photo ?? asset('trusthand/assets/images/resource/cause-1.jpg') }}"
                                        class="card-img" alt="...">
                                </a>
                            </div>
                            <div class="col-8">
                                <div class="ml-3">
                                    <a href="{{ route('detail-donasi', $devan->aksi->id ?? '') }}">
                                        <p style="font-size: 12px;line-height: 17px">
                                            <b>{{ $devan->aksi->judul ?? '' }}</b>
                                        </p>
                                    </a>
                                    <div class="progress-box" style="padding:7px 1px 26px;">
                                        <div class="bar">
                                            @if ($devan->penerimaDonasi)
                                                <div class="bar-inner count-bar"
                                                    style="width:
                                                    @if($devan->penerimaDonasi->donasi_tercapai != 0)
                                                    {{ $devan->penerimaDonasi->donasi_tercapai/ $devan->penerimaDonasi->target_donasi *100 }}%; background:blue;">
                                                    @else
                                                    0%; background:blue;">
                                                    @endif
                                                </div>
                                            @else
                                                <div class="bar-inner count-bar" style="width:100%; background:blue;">
                                                </div>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <h6>
                                                    <span style="font-size: 9px;width:100%;float: left;">
                                                        <b> Rp.
                                                            {{ number_format($devan->penerimaDonasi->donasi_tercapai ?? 0, 0, ',', '.') }}</b>
                                                    </span>

                                                    <span style="font-size: 11px;width:100%;float: left;">
                                                        Diperoleh
                                                    </span>
                                                </h6>
                                            </div>

                                            <div class="col-6">
                                                <h6>
                                                    <span style="font-size: 9px;width:100%;float: right;">
                                                        <b> Rp.
                                                            {{ number_format($devan->penerimaDonasi->target_donasi ?? 0, 0, ',', '.') }}</b>
                                                    </span>

                                                    <span style="font-size: 11px;width:100%;float: left;">
                                                        Target
                                                    </span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            @php
                                $datetime1 = strtotime(date('Y-m-d', strtotime($devan->request_payment)));
                                $datetime2 = strtotime(date('Y-m-d', strtotime(now())));
                                
                                $secs = $datetime2 - $datetime1; // == <seconds between the two times>
                                $days = ($secs / 86400) * 24; //jam
                            @endphp

                            <div class="col-8">
                                @if ($devan->payment_status == 'PENDING')
                                    @if ($days >= 48)
                                        <span style="font-size: 13px;">Status Pembayaran <span
                                                class="badge badge-danger">Expired</span></span>
                                    @endif
                                @else
                                    <span style="font-size: 10px;"><b>Kamu telah berdonasi</b>
                                        <span style="font-size: 10px;color:green;">Rp.
                                            {{ number_format($devan->payment ?? 0, 0, ',', '.') }}</span>
                                    </span>
                                @endif
                            </div>
                            <div class="col-4 d-flex justify-content-end">
                                @if ($devan->payment_status == 'PENDING')
                                    @if ($days >= 48)
                                    @else
                                        <a href="{{ $devan->url_payment }}">
                                            <button type="button" class="btn btn-outline-danger"
                                                style="font-size:10px; width:90px;font-weight:200;line-height:1;">Bayar
                                                Sekarang</button>
                                        </a>
                                    @endif
                                @else
                                    <button type="button" class="btn btn-outline-success"
                                        style="font-size:10px; width:90px;font-weight:200;line-height:1;"
                                        wire:click="$emitTo('donate-form', 'tampilModal', {{ $devan->aksi->id ?? '' }})">Donasi
                                        lagi</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <livewire:page.footer />
    </div>
    {{-- END MOBILE --}}

    {{-- START DESKTOP --}}
    <div class="d-none d-md-block">
        <div class="container" style="margin-top: 150px;margin-bottom:150px;">
            <div class="row">
                @foreach ($data as $devan)
                    <a href="{{ route('detail-donasi', $devan->aksi->id ?? '') }}"
                        wire:key="donasi-saya-{{ $devan->id }}">
                        <div class="card mb-3" style="border-radius: 2%;width:800px;margin:0 auto;">
                            <div class="row no-gutters mt-3 ml-3 mr-3 mb-3">
                                <div class="col-4">
                                    <a href="{{ route('detail-donasi', $devan->aksi->id ?? '') }}">
                                        <img src="{{ $devan->aksi->sampul->url_photo ?? asset('trusthand/assets/images/resource/cause-1.jpg') }}"
                                            class="card-img" style="width: 80%;">
                                    </a>
                                </div>
                                <div class="col-8">
                                    <div class="ml-3">
                                        <a href="{{ route('detail-donasi', $devan->aksi->id ?? '') }}">
                                            <p style="font-size: 20px;line-height: 17px">
                                                <b>{{ $devan->aksi->judul ?? '' }}</b>
                                            </p>
                                        </a>
                                        <div class="progress-box mt-5" style="padding:7px 1px 26px;">
                                            <div class="bar">
                                                @if ($devan->penerimaDonasi)
                                                    <div class="bar-inner count-bar"
                                                        style="width:
                                                        @if($devan->penerimaDonasi->donasi_tercapai != 0)
                                                        {{ $devan->penerimaDonasi->donasi_tercapai/ $devan->penerimaDonasi->target_donasi *100 }}%; background:blue;">
                                                        @else
                                                        0%; background:blue;">
                                                        @endif
                                                    </div>
                                                @else
                                                    <div class="bar-inner count-bar"
                                                        style="width:100%; background:blue;"></div>
                                                @endif
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <h6>
                                                        <span style="font-size: 15px;width:100%;float: left;">
                                                            <b> Rp.
                                                                {{ number_format($devan->penerimaDonasi->donasi_tercapai ?? 0, 0, ',', '.') }}</b>
                                                        </span>

                                                        <span style="font-size: 14px;width:100%;float: left;">
                                                            Diperoleh
                                                        </span>
                                                    </h6>
                                                </div>

                                                <div class="col-6">
                                                    <h6>
                                                        <span style="font-size: 15px;width:100%;float: right;">
                                                            <b> Rp.
                                                                {{ number_format($devan->penerimaDonasi->target_donasi ?? 0, 0, ',', '.') }}</b>
                                                        </span>

                                                        <span style="font-size: 14px;width:100%;float: left;">
                                                            Target
                                                        </span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                @php
                                    $datetime1 = strtotime(date('Y-m-d', strtotime($devan->request_payment)));
                                    $datetime2 = strtotime(date('Y-m-d', strtotime(now())));
                                    
                                    $secs = $datetime2 - $datetime1; // == <seconds between the two times>
                                    $days = ($secs / 86400) * 24; //jam
                                @endphp
                                <div>

                                </div>

                                <div class="col-8">
                                    @if ($devan->payment_status == 'PENDING')
                                        @if ($days >= 48)
                                            <span style="font-size: 16px;">Status Pembayaran <span
                                                    class="badge badge-danger">Expired</span></span>
                                        @endif
                                    @else
                                        <span style="font-size: 10px;"><b>Kamu telah berdonasi</b>
                                            <span style="font-size: 10px;color:green;">Rp.
                                                {{ number_format($devan->payment ?? 0, 0, ',', '.') }}</span>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-4 d-flex justify-content-end">
                                    @if ($devan->payment_status == 'PENDING')
                                        @if ($days >= 48)
                                        @else
                                            <a href="{{ $devan->url_payment }}">
                                                <button type="button" class="btn btn-outline-danger"
                                                    style="font-size:10px; width:90px;font-weight:200;line-height:1;">Bayar
                                                    Sekarang</button>
                                            </a>
                                        @endif
                                    @else
                                        <button type="button" class="btn btn-outline-success"
                                            style="font-size:10px; width:90px;font-weight:200;line-height:1;"
                                            wire:click="$emitTo('donate-form', 'tampilModal', {{ $devan->aksi->id ?? '' }})">Donasi
                                            lagi</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
    </div>
    {{-- START DESKTOP --}}

</div>
