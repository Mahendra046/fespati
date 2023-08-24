<x-app title="Admin | Berita-Detail">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-lg-12 col-sm-12">
                <br><br>
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title text-primary">{{ $berita->judul }}</h5>
                    </div>
                    <div class="card-body">
                        <img class="card-img-top img-fluid center" src="{{ url("public/$berita->foto") }}"
                            style="width:100%;" alt="Card image cap">
                            <br><br>
                        <p class="card-text">{!!nl2br( $berita->isi) !!}</p>
                        <p class="card-text text-dark">{{ $berita->created_at->format('d F Y') }} | Fespati Ketapang</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app>
