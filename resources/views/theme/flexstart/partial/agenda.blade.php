<section id="agenda" class="agenda section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>AGENDA</h2>
        <p>{{ $data['profil']['singkatan'] }}<br></p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
    "320": {
        "slidesPerView": 1, // Ubah menjadi 1 untuk tampilan lebih besar di perangkat kecil
        "spaceBetween": 20
    },
    "480": {
        "slidesPerView": 2, // Ubah menjadi 2 untuk tampilan lebih besar di perangkat menengah
        "spaceBetween": 30
    },
    "640": {
        "slidesPerView": 3,
        "spaceBetween": 40
    },
    "992": {
        "slidesPerView": 4,
        "spaceBetween": 60
    }
}
                }
            </script>
            <div class="swiper-wrapper align-items-center">
                @foreach ($data['agenda'] as $agenda)
                <div class="swiper-slide">
                    <div class="col-lg-4">
                        <div class="card">
                            <img src="{{ env('URL_BACKEND').'/storage/'.$agenda['image'] }}" class="img-fluid" alt="{{ $agenda['title'] }}">
                            <a href="#" aria-label="Read more about {{ $agenda['title'] }}">
                                <h3>{{ $agenda['title'] }}</h3>
                            </a>
                            <p>{{ $agenda['published'] }}</p>
                        </div>
                    </div><!-- End Card Item -->
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
