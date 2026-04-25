@extends('theme.flexstart.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              {{-- <h1>{{ $data['page']['title'] }}</h1> --}}
              {{-- <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p> --}}
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ url("/beranda") }}">Beranda</a></li>
            <li class="current">Galeri</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Galeri</h2>
        <p>{{ $data['profil']['singkatan'] }}</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-Kegiatan">Kegiatan</li>
            <li data-filter=".filter-Inovasi">Inovasi</li>
            <li data-filter=".filter-Prestasi">Prestasi</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

          @foreach ($data['galeri'] as $galeri)
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $galeri['category']}}">
              <div class="portfolio-content h-100">
                <img src="{{ env('URL_BACKEND')."/storage/".$galeri['image'] }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $galeri['category']}}</h4>
                  <p>{{ $galeri['title']}}</p>
                  <a href="{{ env('URL_BACKEND')."/storage/".$galeri['image'] }}" title="{{ $galeri['category']}}" data-gallery="portfolio-gallery-{{ $galeri['category']}}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="{{ url( '/detailgaleri/' . $galeri['slug']) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
          @endforeach
            

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->
@endsection
@section('description', $data['profil']['seo_desc'])
@section('keyword', $data['profil']['seo_desc'])
@section('title', 'Galeri')
@section('name', $data['profil']['name'])
@section('image',  env('URL_BACKEND')."storage/".$data['profil']['logo'] )
 