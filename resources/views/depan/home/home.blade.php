<x-depan title="Beranda | Fespati Ketapang">
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero" style="
    
    ">

        {{-- <div class="info d-flex align-items-center">
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
                        <a data-aos="fade-up" data-aos-delay="200" href="{{ url('kontak') }}" style=""
                            class="btn-get-started">Ayo
                            Bergabung</a>
                    </div>
                </div>
            </div>
        </div> --}}

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active"
                style="background-image: url(public/up/assets/img/banner/bg1.jpg)">
            </div>
            <div class="carousel-item" style="background-image: url(public/up/assets/img/banner/bg2.jpg)">
            </div>
            <div class="carousel-item" style="background-image: url(public/up/assets/img/banner/bg3.jpg)">
            </div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="section-header">
                    <h2>PPID KOTA BALIKPAPAN</h2>
                    <p>LAYANAN DAN INFORMASI PUBLIK</p>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-3">
                        <a href="https://wa.me/62895372200063?text=Isi Pesan">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ url('public') }}/Up/assets/img/layanan/client1.png" alt="" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <a href="https://wa.me/62895372200063?text=Isi Pesan">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ url('public') }}/Up/assets/img/layanan/client2.png" alt="" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <a href="https://wa.me/62895372200063?text=Isi Pesan">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ url('public') }}/Up/assets/img/layanan/client3.png" alt="" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <a href="https://wa.me/62895372200063?text=Isi Pesan">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ url('public') }}/Up/assets/img/layanan/client4.png" alt="" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </a>
                    </div>
                </div>
    
                <div class="row gy-4 mt-1">
    
                    <div class="col-lg-12 ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2320.353680999989!2d109.96771672800452!3d-1.8204812996290975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e0518931def7153%3A0x666e3a9a4aa24fb2!2sGg.%20Radikin%2C%20Payah%20Kumang%2C%20Kec.%20Delta%20Pawan%2C%20Kabupaten%20Ketapang%2C%20Kalimantan%20Barat!5e0!3m2!1sid!2sid!4v1688310939559!5m2!1sid!2sid"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div><!-- End Google Maps -->
                </div>
    
            </div>
        </section><!-- End Contact Section -->


    </main><!-- End #main -->

    <style>
       .hero .carousel-item::before {
  content: "";
  background-color: rgba(0, 0, 0, 0.148);
  position: absolute;
  inset: 0;
}
    </style>
</x-depan>
