<div class="kiri">
    <p style="font-size: 18px; color:black;"><b>Aksiku ({{ $count }})</b></p>
</div>

<div class="container mt-3" style="margin-bottom: 100px !important;">
    @foreach ($data as $datanya)
    <div class="card mb-4" style="max-width: 540px;border-radius: 2%;">
        <div class="row no-gutters mt-3 ml-3 mr-3 mb-3">
            <div class="col-4">
                <img src="{{ $datanya->sampul->url_photo?? asset('trusthand/assets/images/resource/cause-1.jpg') }}" class="card-img" style="height:100px !important; object-fit:cover;background-repeat:no-repeat;background-position: center center !important;">
            </div>
            <div class="col-8">
                <div class="ml-3">
                    <p style="font-size: 12px;line-height: 17px"><b>{{ $datanya->judul }}</b></p>
                    <div class="progress-box" style="padding:7px 1px 26px;">

                        <div class="bar">
                            <div class="bar-inner count-bar" style="width: 80%; background:blue;"></div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <h6>
                                    <span style="font-size: 9px;width:100%;float: left;" >
                                        <b> Rp. {{ number_format(2000,0,',','.') }}</b>
                                    </span>
                                    
                                    <span style="font-size: 11px;width:100%;float: left;" >
                                     Diperoleh
                                    </span>
                                </h6>
                            </div>
                           
                            <div class="col-6">
                                <h6>
                                    <span style="font-size: 9px;width:100%;float: right;">
                                        <b> Rp. {{ number_format(2000,0,',','.') }} </b>
                                    </span>
                         
                                    <span style="font-size: 11px;width:100%;float: left;" >
                                        Target
                                    </span> 
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    @endforeach
</div>
<livewire:page.footer/>
<livewire:button-plus/>


