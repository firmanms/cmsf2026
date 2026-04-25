@extends('theme.flexstart.layouts.app')

@section('content')
@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
            <br>
              <h1>{{ $data['detail_galeri']['title'] }}</h1>
              {{-- <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p> --}}
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ url("/beranda") }}">Beranda</a></li>
            <li class="current">{{ $data['detail_galeri']['title'] }}</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper">

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
                  }
                }
              </script>

              <div class="swiper-wrapper align-items-center">

                 @foreach ($data['detail_galeri']['image_gallery'] as $image)
                <div class="swiper-slide">
                  <img src="{{ env('URL_STORAGE').$image }}" alt="">
                </div>
                @endforeach

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>{{ $data['detail_galeri']['title'] }}</h3>
              <ul>
                <li><strong>Kategori</strong>: {{ $data['detail_galeri']['category'] }}</li>
                <li><strong>Tanggal Galeri</strong>: {{ Carbon::parse($data['detail_galeri']['published'])->translatedFormat('d F Y') }}</li>
                <li><strong>Deskripsi</strong>: 
                <p>
                {{ $data['detail_galeri']['description'] }}
                </p>
                </li>
              </ul>
            </div>
            
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->
@endsection
@section('description', $data['profil']['seo_desc'])
@section('keyword', $data['profil']['seo_desc'])
@section('title', $data['detail_galeri']['title'])
@section('name', $data['profil']['name'])
@section('image',  env('URL_STORAGE').$data['detail_galeri']['image'] )