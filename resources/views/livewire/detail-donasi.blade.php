<div>
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
                                        <button class="donate-box-btn theme-btn-one"><span>Donate Now</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-one">
                            <div class="text" style="text-align:justify; text-justify:auto;text-indent: 40px;  color:black;">
                               <p>{!! $datanya->deskripsi !!}</p>
                            </div>
                        </div>
                        {{-- <div class="content-two">
                            <div class="text">
                                <h3>Challenge</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Libero turpis blandit blandit mauris aliquam condimentum quam suspendisse. Sit bibendum adipiscing enim lacus quis. A nec accumsan aliquam magnis orci. Dui amet scelerisque.</p>
                                <ul class="list-style-one clearfix">
                                    <li>Fighting for People</li>
                                    <li>Act for Homeless</li>
                                    <li>Respect & Integrating</li>
                                    <li>Support Homeless People</li>
                                    <li>Quick Fundraising</li>
                                </ul>
                            </div>
                            <div class="image-box">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image"><img src="assets/images/resource/cause-10.jpg" alt=""></figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                        <figure class="image"><img src="assets/images/resource/cause-15.jpg" alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="content-three">
                            <div class="text">
                                <h3>Solution</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Libero turpis blandit blandit mauris aliquam condimentum quam suspendisse. Sit bibendum adipiscing enim lacus quis. A nec accumsan aliquam magnis orci. Dui amet scelerisque lectus commodo iaculis semper. Arcu eget vestibulum amet faucibuseugi augue Odio viverra odio tempor porttitor orc.</p>
                                <p>Imperdiet consectetur gravida rutrum. Tempus mattis sit massa lacus morbi. Feugiat aliquam aenean sagittis nunc neque sit. Nec lorem tincidunt arcu nunc ac accumsan risus felis in. Mi ornare convallis tincidunt maecenas dui auctor cursus platea velit.</p>
                            </div>
                        </div> --}}
                        {{-- <div class="content-four">
                            <h3>Leave A Comment</h3>
                            <form action="causes-details.html" method="post">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="name" placeholder="Your name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email address" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone number" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button type="submit" class="theme-btn-one"><span>Send us a message</span></button>
                                    </div>
                                </div>
                            </form>
                        </div> --}}
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
                                <button class="donate-box-btn theme-btn-one"><span>Donate Now</span></button>
                            </div>
                            
                        </div>
                        {{-- <div class="sidebar-widget tags-widget">
                            <div class="widget-title">
                                <h3>Popular Tags</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="tags-list clearfix">
                                    <li><a href="causes-details.html">Education</a></li>
                                    <li><a href="causes-details.html">Donate</a></li>
                                    <li><a href="causes-details.html">Food</a></li>
                                    <li><a href="causes-details.html">Charity</a></li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cause-details end -->
</div>