<x-depan title="Beranda | Fespati Ketapang">
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <br><br>
                        <h5 class="text-light" data-aos="fade-down">Selamat Datang Di Situs Resmi</h5>
                        <h4 class="text-light" data-aos="fade-down"><span>FEDERASI SENI PANAHAN TRADISIONAL
                                INDONESIA</span></h4>
                        <h3 class="text-light" data-aos="fade-down" style="color:var(--color-primary);">
                            <span>(FESPATI)</span>
                        </h3>
                        <h3 class="" data-aos="fade-down" style="color:var(--color-primary);"><span>KABUPATEN
                                KETAPANG</span></h3>
                        <br>
                        <h4 class="text-light" data-aos="fade-up"><span><i>-UPGRADE YOUR PERFORMANCE-</i></span></h4>
                        <br>
                        <a data-aos="fade-up" data-aos-delay="200" href="{{url('kontak')}}" style="" class="btn-get-started">Ayo
                            Bergabung</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active"
                style="background-image: url(public/up/assets/img/berita/background4.jpg)">
            </div>
            {{-- <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-2.jpg)">
        </div>
        <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-3.jpg)">
        </div>
        <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-4.jpg)">
        </div>
        <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-5.jpg)">
        </div> --}}

            {{-- <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a> --}}

        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="section-header">
                    <h2>Berita Terbaru</h2>
                    {{-- mau caption tinggal kasih paragraf --}}
                </div>

                <div class="row gy-4 posts-list">

                    @foreach ($recent_berita as $berita)
                        <div class="col-xl-4 col-md-6">
                            <div class="post-item position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ url("public/$berita->foto") }}" style="height:250px; width:500px; background-size: cover;" class="img-fluid" alt="">
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
                                            <i class="bi bi-folder2"></i> <span class="ps-2">Kategori</span>
                                        </div>
                                    </div>

                                    <hr>

                                    <a href="{{url('berita/detail', $berita->id)}}" class="readmore stretched-link"><span>Baca
                                        Selengkapnya</span><i class="bi bi-arrow-right"></i></a>

                                </div>

                            </div>
                        </div><!-- End post list item -->
                    @endforeach

                </div><!-- End blog posts list -->
                <br><br>
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <a data-aos="fade-up" data-aos-delay="200" href="{{url('berita')}}" class="btn-get-started"
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

        <!-- ======= Services Section ======= -->
        <section id="projects" class="projects" style="background-color:#f5f6f7">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Event Fespati</h2>
                    <p>Federasi Panahan Tradisional Indonesia</p>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($list_event as $event)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                        <div class="portfolio-content h-100" style=" max-height: 250px; overflow: hidden;">
                            <img src="{{url("public/$event->foto")}}"style="object-fit:cover; width:100% height:100%;"  class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{$event->nama_event}}</h4>
                                <p>{{$event->nama_event}}</p>
                                <a href="{{url("public/$event->foto")}}" title="{{$event->nama_event}}"
                                    data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="{{url('event_detail',$event->id)}}" title="Daftar Sekarang" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Projects Item -->
                    @endforeach

                </div><!-- End Projects Container -->

            </div>
        </section><!-- End Services Section -->



    </main><!-- End #main -->

    <style>
        .hero .info .btn-get-started {
                        font-family: var(--font-primary);
                        font-weight: 500;
                        font-size: 16px;
                        letter-spacing: 1px;
                        display: inline-block;
                        padding: 12px 30px;
                        border-radius: 50px;
                        margin: 6px;
                        background: var(--color-primary);
        }
        .hero .info .btn-get-started:hover {
            font-size: 17px;
        }
    </style>
</x-depan>
