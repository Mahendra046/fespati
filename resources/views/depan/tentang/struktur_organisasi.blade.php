<x-depan title="Struktur | Fespati Ketapang">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('public/Up/assets/img/berita/background4.jpg');">
        <div class="container position-relative d-flex flex-column" data-aos="fade">
            <h2>Struktur Pengurus</h2>
            <ol>
                <li><a href="{{ url('beranda') }}">Beranda</a></li>
                <li>Pengurus Fespati Cabang</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="container">
                    <div class="service-item  position-relative">
                        <di class="row position-relative">

                            @foreach ($struktur as $struktur)

                                    <img src="{{ url("public/$struktur->foto") }}" style="width:100%;" alt="">


                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</x-depan>
