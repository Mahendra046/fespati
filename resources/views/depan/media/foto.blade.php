<x-depan title="Media-Foto | Fespati Ketapang">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('public/Up/assets/img/berita/background4.jpg');">
        <div class="container position-relative d-flex flex-column" data-aos="fade">

            <h2>Galeri</h2>
            <ol>
                <li><a href="{{url('beranda')}}">Beranda</a></li>
                <li>Foto</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order">

                <div class="row gy-4 portfolio-container align-items-center" data-aos="fade-up" data-aos-delay="200">

                    @foreach ($list_galeri as $galeri)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100" style="">
                                <img src="{{ url("public/$galeri->foto") }}" style="height:200px; width:500px; background-size: cover;" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Remodeling 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="{{ url("public/$galeri->foto") }}" title="Remodeling 1"
                                        data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->
                    @endforeach


                </div><!-- End Projects Container -->

            </div>

        </div>
    </section><!-- End Our Projects Section -->
</x-depan>
