<section class="news-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred mb_55">
            <span class="sub-title">Berita</span>
            <h2>Kabupaten Wonosobo</h2>
        </div>
        <div class="row clearfix">
            @foreach($article as $art)
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="blog-details.html"><img          
                        src="https://diskominfo.wonosobokab.go.id/{{$art["gambar_muka"]["path"]}}{{$art["gambar_muka"] ["file_name"]}}" 
                        alt="" style="height:300px; background-size: cover;
                            background-position: center center;"></a></figure>
                        <div class="lower-content p_relative d_block">
                            <div class="text">
                                <div class="post-date"><h3>{{ date('d', strtotime($art["created_at"])) }}<span>{{ date('F', 
                                strtotime($art["created_at"])) }}</span></h3></div>
                                <h3><a href="{{ route('detail-berita', $art["id_posting"]) }}">{{substr($art["judul_posting"],0,50)}}..</a></h3>
                                <p>{{substr($art["kata_kunci"],0,50)}}..</p>
                                <div class="btn-box">
                                    <a href="{{ route('detail-berita', $art["id_posting"]) }}" class="theme-btn-two">Read more</a>
                                </div>
                            </div>
                            <ul class="lower-box">
                                <li class="admin"><i class="icon-15"></i><a href="blog-details.html">Admin</a></li>
                                <li class="comment"><i class="icon-16"></i><a href="blog-details.html">0 Comnt</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
