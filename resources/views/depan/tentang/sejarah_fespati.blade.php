<x-depan title="Sejarah | Fespati Ketapang">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('public/Up/assets/img/berita/background4.jpg');">
        <div class="container position-relative d-flex flex-column " data-aos="fade">
            <h2>Sejarah</h2>
            <ol>
                <li><a href="{{ url('beranda') }}">Beranda</a></li>
                <li>Sejarah</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <section id="about" class="about">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="row position-relative">
                @foreach ($sejarah as $sejarah)
                    <div class="col-lg-7 about-img" style="background-image: "><img
                            src="{{ url("public/$sejarah->foto") }}" alt=""></div>

                    <div class="col-lg-7">
                        <h2>Sejarah Fespati Nasional</h2>
                        <div class="our-story">
                            <h4>2023</h4>
                            <h3>Tentang Kami</h3>

                            <p>{!! nl2br($sejarah->isi) !!}</p>

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <style>
        .about .about-img img {
            min-height: 400px;
            width: 50em;
            background-size: contain;
            background-position: center;
        }

        @media (min-width: 992px) {
            .about .about-img img {
                width: 100%;
                position: absolute;
                top: 0;
                right: 0;
            }
        }

        @media (min-width: 576px) {
            .about .about-img img {
                width: 100%;
                position: absolute;
                top: 0;
                right: 0;
            }
        }

        @media (min-width: 356px) {
            .about .about-img img {
                width: 100%;
                position: absolute;
                top: 0;
                right: 0;
            }
        }
    </style>
</x-depan>
