<x-depan title="Berita | Fespati Ketapang">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('public/Up/assets/img/berita/background4.jpg');">
        <div class="container position-relative d-flex flex-column" data-aos="fade">

            <h2>Berita</h2>
            <ol>
                <li><a href="{{ url('beranda') }}">Beranda</a></li>
                <li>Berita</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 posts-list">

                @foreach ($list_berita as $berita)
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ url("public/$berita->foto") }}" style="height:250px; width:500px; background-size: cover;"class="img-fluid" alt="">
                                <span class="post-date">{{ $berita->created_at->format('d F Y') }}</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">{{ $berita->judul }}</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Admin</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Berita</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="{{url('berita/detail',$berita->id)}}" class="readmore stretched-link"><span>Baca
                                        Selengkapnya</span><i class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post list item -->
                @endforeach

            </div><!-- End blog posts list -->
            <br><br>

            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <a data-aos="fade-up" data-aos-delay="200" href="{{url('beritaall')}}" class="btn-get-started"
                        style="font-family: var(--font-primary);
                font-weight: 500;
                font-size: 20px;
                letter-spacing: 1px;
                display: inline-block;
                padding: 12px 30px;
                border-radius: 50px;
                margin: 6px;
                color: #fff;
                background: var(--color-primary);">Berita
                        Lainnya</a>
                </div>
            </div>
            
        </div>
    </section><!-- End Blog Section -->
</x-depan>
