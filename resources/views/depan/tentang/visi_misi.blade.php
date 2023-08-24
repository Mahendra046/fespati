<x-depan title="visi-Misi | Fespati Ketapang">
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('public/Up/assets/img/berita/background4.jpg');">
        <div class="container position-relative d-flex flex-column" data-aos="fade">
            <h2>Visi-Misi</h2>
            <ol>
                <li><a href="{{ url('beranda') }}">Beranda</a></li>
                <li>Visi-Misi</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <section id="alt-services" class="alt-services">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="row justify-content-around gy-4">
                @foreach ($visi as $visi)
                <div class="col-lg-6 img-bg aos-init aos-animate"
                    style="background-image: url(assets/img/alt-services.jpg);" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{url("public/$visi->foto")}}" style=" height: 95%; width: 100%; background-size: cover;" alt="">
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h3>Visi</h3>

                        <p>
                            {!! nl2br($visi->isi) !!}
                        </p>
                    @endforeach

                    <div class="icon-box d-flex position-relative aos-init aos-animate" data-aos="fade-up"
                        data-aos-delay="100">
                        <div>
                            <h3>Misi</h4>
                                @foreach ($misi as $misi)
                                    <p>{!! nl2br($misi->isi) !!}</p>
                                @endforeach
                        </div>
                    </div><!-- End Icon Box -->

                </div>
            </div>

        </div>
    </section>
</x-depan>
