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
                                <img src="https://diskominfo.wonosobokab.go.id/{{$art["gambar_muka"]["path"]}}{{$art["gambar_muka"] ["file_name"]}}" style="height:200px; background-size: cover; background-position: center center;">
                            </figure>
                            <div class="lower-content p_relative d_block">
                                <div class="text">
                                    <div class="post-date"><h3>{{ date('d', strtotime($art["created_at"])) }}<span>{{ date('F', 
                                    strtotime($art["created_at"])) }}</span></h3></div>
                                    <h3><a href="{{ route('detail-berita', $art["id_posting"]) }}">{{substr($art["judul_posting"],0,35)}}..</a></h3>
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
<div class="auto-container d-block d-md-none">
    <section class="news-section sec-pad">
        <div class="auto-container">
            <div class="sec-title centred mb_55">
                <span class="sub-title">Berita</span>
                <h2 style="font-size: 25px !important; ">Kabupaten Wonosobo</h2>
            </div>
            <div class="row clearfix">
                @foreach($article as $art)
                <div class="col-lg-3 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="https://diskominfo.wonosobokab.go.id/{{$art["gambar_muka"]["path"]}}{{$art["gambar_muka"] ["file_name"]}}" style="height:200px; background-size: cover; background-position: center center;">
                            </figure>
                            <div class="lower-content p_relative d_block">
                                <div class="text">
                                    <div class="post-date"><h3 style="font-size: 20px !important; ">{{ date('d', strtotime($art["created_at"])) }}<span style="font-size: 14px !important; ">{{ date('F', 
                                    strtotime($art["created_at"])) }}</span></h3></div>
                                    <h3><a href="{{ route('detail-berita', $art["id_posting"]) }}">{{substr($art["judul_posting"],0,40)}}..</a></h3>
                                    <p>{{substr($art["kata_kunci"],0,60)}}..</p>
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
{{-- END MOBILE --}}


