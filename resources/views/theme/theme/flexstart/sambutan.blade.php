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
            <li class="current">Sambutan Pimpinan</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Halaman</h2>
        <p>Sambutan Pimpinan</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" style="max-width: 100%;max-height: 100%;overflow: auto;box-sizing: border-box; ">
       
       <section id="about" class="about section">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              
              <h2>Sambutan</h2>
              <p align="justify">
                {!! $data['profil']['welcome'] !!}
              </p>
              <h3>{{ $data['profil']['leader_name'] }}</h3>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>{{ $data['profil']['nickname'] }}</span>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ env('URL_BACKEND')."/storage/".$data['profil']['leader_foto'] }}" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section>
      </div>

    </section><!-- /Starter Section Section -->
@endsection
@section('description', $data['profil']['seo_desc'])
@section('keyword', $data['profil']['seo_desc'])
@section('title', 'Sambutan Pimpinan')
@section('name', $data['profil']['name'])
@section('image',  env('URL_BACKEND')."storage/".$data['profil']['logo'] )
