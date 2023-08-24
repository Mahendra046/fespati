<x-depan title="Register KTA">
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('public/Up/assets/img/berita/background4.jpg');">
        <div class="container position-relative d-flex flex-column" data-aos="fade">
            <ol>
                <li><a href="{{ url('beranda') }}">Beranda</a></li>
                <li>Registrasi KTA</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <section id="blog" class="blog">
        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-5">
                @foreach ($register as $register)
                    <div class="col-lg-9">


                        <h2 class="title">{{ $register->judul }}</h2>
                        <article class="blog-details">




                            <div class="post-img">
                                <img src="{{ url("public/$register->foto") }}" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                                <p>
                                    {!! nl2br($register->keterangan) !!}
                                </p>


                            </div><!-- End post content -->

                            <div class="meta-bottom">
                            </div><!-- End meta bottom -->

                        </article><!-- End blog post -->


                    </div>

                    <div class="col-lg-3">

                        <div class="sidebar">
                            <div class="sidebar-item tags">
                                <h3 class="sidebar-title">Unduhan</h3>
                                <ul class="mt-3">
                                    <li><a href="{{ $register->link_unduhan }}" target="blank">Form Pendaftaran
                                            Anggota</a></li>
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End Blog Sidebar -->

                    </div>
                @endforeach
            </div>


        </div>
    </section>
    <style>
        .blog .sidebar .tags ul a {
            color: #4d5971;
            font-size: 14px;
            padding: 6px 14px;
            margin: 0 6px 8px 0;
            border: 1px solid rgba(131, 136, 147, 0.4);
            display: inline-block;
            transition: 0.3s;
        }

        .blog .sidebar .tags ul a:hover {
            color: white;
            border: 1px solid var(--color-primary);
            background: var(--color-primary);
        }
    </style>
</x-depan>
