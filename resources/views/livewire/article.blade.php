{{-- START DESKTOP --}}
<div class="auto-container d-none d-md-block">
    <section class="news-section sec-pad">
        <div class="auto-container">
            <div class="sec-title centred mb_55">
                <span class="sub-title">Berita</span>
                <h2 >Kabupaten Wonosobo</h2>
            </div>
            <div class="row clearfix">
                @foreach($article as $art)
                <div class="col-lg-3 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://diskominfo.wonosobokab.go.id/{{$art["gambar_muka"]["path"]}}{{$art["gambar_muka"] ["file_name"]}}"  style="height:200px; object-fit:cover;background-repeat:no-repeat;background-position: center center !important;">
                            </figure>
                            <div class="lower-content p_relative d_block">
                                <div class="text">
                                    <div class="post-date">
                                        <h3>{{ \Carbon\Carbon::parse($art["created_at"])->isoFormat('DD') }}
                                            <span>{{substr(\Carbon\Carbon::parse($art["created_at"])->isoFormat('MMMM'),0,3)}} </span>
                                        </h3>
                                    </div>
                                    <h3>
                                        <a href="{{ route('detail-berita', $art["id_posting"]) }}">{{substr($art["judul_posting"],0,35)}}..</a>
                                    </h3>
                                    <p>{{substr($art["kata_kunci"],0,42)}}..</p>
                                    <div class="btn-box">
                                        <a href="{{ route('detail-berita', $art["id_posting"]) }}" class="theme-btn-two">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
{{-- END DESKTOP --}}

{{-- START MOBILE --}}
<div class="auto-container d-block d-md-none" style="margin-bottom: 70px !important;">
    <div class="sec-title centred">
        <span class="sub-title">Berita</span>
        {{-- <h2 style="font-size: 25px !important; ">Kabupaten Wonosobo</h2> --}}
    </div>
    <div class="row clearfix">
            <div class="row scroller">
                <div class="col-7 sidebar addscrollbar">
                    @foreach($article as $art)
                        <div class="col-7 full-wallet float-left d-inline-block mb-5">
                            <div class="col-7 pl-0 pr-0 mt-4" style="max-width: 100%">
                                <a href="{{ route('detail-berita', $art["id_posting"]) }}">
                                    <div class="col-lg-4 col-md-6 col-sm-12 cause-block mb-3">
                                        <div class="cause-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms" >
                                            <div class="inner-box">
                                                <figure class="image-box">
                                                    <img src="https://diskominfo.wonosobokab.go.id/{{$art["gambar_muka"]["path"]}}{{$art["gambar_muka"] ["file_name"]}}" style="height:200px; object-fit:cover;background-repeat:no-repeat;background-position: center center !important;">
                                                </figure>
                                                <div class="lower-content p_relative d_block">
                                                    <div class="container mt-2">
                                                        <span style="font-size: 10px;">{{ \Carbon\Carbon::parse($art["created_at"])->isoFormat('DD MMMM YYYY') }}</span>
                                                        {{-- <div class="post-date"><h3 style="font-size: 20px !important; ">{{ date('d', strtotime($art["created_at"])) }}<span style="font-size: 14px !important; ">{{ date('F', 
                                                        strtotime($art["created_at"])) }}</span></h3></div> --}}
                                                        <h3><a href="{{ route('detail-berita', $art["id_posting"]) }}">{{substr($art["judul_posting"],0,35)}}..</a></h3>
                                                        {{-- <p>{{substr($art["kata_kunci"],0,60)}}..</p> --}}
                                                        {{-- <div class="btn-box">
                                                            <a href="{{ route('detail-berita', $art["id_posting"]) }}" class="theme-btn-two">Lihat Selengkapnya</a>
                                                        </div> --}}
                                                    </div>
                                                    <ul class=" lower-box">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <span style="font-size: 10px;"><i> Sumber: Diskominfo Wonosobo</i></span>
                                                        </div>
                                                        {{-- <div class="col-8 d-flex justify-content-end">
                                                            <span style="font-size: 11px;">sdsdsds</span>
                                                        </div> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    {{-- SUPAYA TIDAK KEPOTONG --}}
                    <div class="col-4 full-wallet float-left d-inline-block"></div>
                    {{-- END SUPAYA TIDAK KEPOTONG --}}
            </div>
        </div>    
    </div>
</div>
{{-- END MOBILE --}}
