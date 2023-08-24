<x-depan title="Event-Detail | Fespati">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('../public/Up/assets/img/berita/background4.jpg');">
        <div class="container position-relative d-flex flex-column" data-aos="fade">

            <h2>Event Detail</h2>
            <ol>
                <li><a href="{{ url('beranda') }}">Beranda</a></li>
                <li>Event Detail</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
        <div class="container" data-aos="fade-up">

            <ul class="nav nav-tabs row  g-2 d-flex">

                <li class="nav-item col-6">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <h4>Informasi</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item col-6">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <h4>Scoring</h4>
                    </a>
                </li><!-- End tab nav item -->
            </ul>

            <div class="tab-content">

                <div class="tab-pane active show" id="tab-1">
                    <section id="project-details" class="project-details">
                        <div class="container" data-aos="fade-up" data-aos-delay="100">

                            <div class="position-relative h-100">
                                <div class="slides-1 portfolio-details swiper">
                                    <div class="swiper-wrapper align-items-center">

                                        <div class="swiper-slide" style="max-heigth: 400px; width: 100%">
                                            <img src="{{ url("public/$event->foto") }}"
                                                style="heigth: 400px; width: 100%;" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row justify-content-between gy-4 mt-4">

                                <div class="col-lg-8">
                                    <div class="portfolio-description">
                                        <h2>{{ $event->nama_event }}</h2>
                                        <div class="testimonial-item">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                {!! nl2br($event->keterangan) !!}
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="portfolio-info">
                                        <h3>Informasi Terkait Event</h3>
                                        <ul class="nav nav-tabs row  g-2 d-flex">
                                            <li><strong>Event Mulai</strong> <span>{{ $event->mulai }}</span></li>
                                            <li><strong>Event Selesai</strong> <span>{{ $event->selesai }}</span></li>
                                            <li><strong>Jam Pelaksanaan</strong> <span>{{ $event->jam }}</span></li>
                                            <li><strong>Lokasi</strong> <span>{{ $event->lokasi }}</span></li>
                                            {{-- <li><a href="{{$event->id}}" data-bs-toggle="tab" data-bs-target="#tab-2" class="btn-visit align-self-start">Daftar Event Sekarang</a></li> --}}
                                            <button class="accordion-button btn-visit align-self-start" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                Daftar
                                            </button>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section><!-- End Projet Details Section -->
                </div><!-- End tab content item -->


                <div class="row">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item col-lg-12">
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <form action="{{ url('pendaftar') }}" method="post" enctype="multipart/form-data">
                                    <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                        <h3>Pendaftaran Event</h3>
                                        <p class="fst-italic">
                                            Untuk Melakukan Pendaftaran Diharapkan Memiliki KTA Fespati.
                                        </p>
                                            @csrf
                                            <input type="hidden" name="id_event" value="{{$event->id}}">
                                            <div class="form-group">
                                                <label for="" class="control-label">Nama</label>
                                                <input type="text" name="nama" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">No.WA</label>
                                                <input type="text" name="no_wa" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Club Panahan</label>
                                                <select name="id_club" id="" class="form-control">
                                                    <option value="">-PILIH-</option>
                                                    @foreach ($club as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nama_club }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">KTA</label>
                                                <input type="file" name="kta" class="form-control">
                                            </div>
                                            <br>
                                            <button style="font-family: var(--font-primary);
                                            font-weight: 300;
                                            font-size: 20px;
                                            letter-spacing: 1px;
                                            display: inline-block;
                                            padding: 12px 30px;

                                            border-radius: 50px;
                                            margin: 3px;
                                            color: #fff;
                                            background: var(--color-primary);">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/features-2.jpg" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="tab-pane" id="tab-3">
                    <div class="row">
                        <div
                            class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Voluptatibus commodi accusamu</h3>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</li>
                                <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores
                                    dolores quos qui a.
                                    Ipsum neque dolor voluptate nisi sed.</li>
                            </ul>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore
                                magna aliqua.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-3.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End tab content item -->

            </div>

        </div>
    </section><!-- End Features Section -->


</x-depan>
