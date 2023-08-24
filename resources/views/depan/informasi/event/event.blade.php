<x-depan title="Event | Fespati Ketapang">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('public/Up/assets/img/berita/background4.jpg');">
        <div class="container position-relative d-flex flex-column" data-aos="fade">

            <h2>Event</h2>
            <ol>
                <li><a href="{{ url('beranda') }}">Beranda</a></li>
                <li>Event</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order">

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($list_event as $event)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100" style=" max-height: 250px; overflow: hidden;">
                                <img src="{{ url("public/$event->foto") }}"
                                    style="object-fit:cover; width:100% height:100%; " class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{$event->nama_event}}</h4>
                                    {{-- <p>{{$event->keterangan}}</p> --}}
                                    <a href="{{ url("public/$event->foto") }}" title="{{$event->nama_event}}"
                                        data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="{{url('event_detail',$event->id)}}" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->
                    @endforeach

                </div><!-- End Projects Container -->

            </div>

        </div>
    </section><!-- End Our Projects Section -->
</x-depan>
