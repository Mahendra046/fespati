<x-depan title="Berita-Detail | Fespati Ketapang">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('../../public/Up/assets/img/berita/background4.jpg');">
            <div class="container position-relative d-flex flex-column" data-aos="fade">

                <h2>Berita</h2>
                <ol>
                    <li><a href="{{ url('beranda') }}">Beranda</a></li>
                    <li>Berita Detail</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5">

                    <div class="col-lg-8">

                        <article class="blog-details">

                            <div class="post-img">
                                <img src="{{url("public/$berita->foto")}}" style="width:100%; height: 500px;" alt="" class="img-fluid">
                            </div>

                            <h2 class="title">{{$berita->judul}}</h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="{{url('berita/detail',$berita->id)}}">Admin</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="{{url('berita/detail',$berita->id)}}"><time>{{$berita->created_at->format('d F Y')}}</time></a>
                                    </li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                <p>{!!nl2br( $berita->isi)!!}</p>
                            </div><!-- End post content -->

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="{{url('berita')}}">Berita</a></li>
                                </ul>
                            </div><!-- End meta bottom -->

                        </article><!-- End blog post -->

                    </div>

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">Berita Terbaru</h3>

                                <div class="mt-3">
                                    @foreach ($recent_berita as $berita)
                                    <div class="post-item mt-3">
                                        <img src="{{url("public/$berita->foto")}}" alt="">
                                        <div>
                                            <h4><a href="{{url('berita/detail',$berita->id)}}">{{$berita->judul}}</a></h4>
                                            <time datetime="">{{$berita->created_at->format('d F Y')}}</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    @endforeach

                                </div>

                            </div><!-- End sidebar recent posts-->

                        </div><!-- End Blog Sidebar -->

                    </div>
                </div>

            </div>
        </section><!-- End Blog Details Section -->
</x-depan>
