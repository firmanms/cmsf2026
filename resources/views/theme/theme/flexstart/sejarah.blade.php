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
            <li class="current">Sejarah</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Halaman</h2>
        <p>Sejarah</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
       
        @php
            $htmlContent = $data['profil']['sejarah'];
            $absoluteUrl = env('URL_STORAGE');
            $relativePath = '/storage/';

            $updatedHtmlContent = str_replace($relativePath, $absoluteUrl, $htmlContent);
        @endphp

        {!! $updatedHtmlContent !!}
      </div>

    </section><!-- /Starter Section Section -->
@endsection
@section('description', $data['profil']['seo_desc'])
@section('keyword', $data['profil']['seo_desc'])
@section('title', 'Sekarah')
@section('name', $data['profil']['name'])
@section('image',  env('URL_STORAGE').$data['profil']['logo'] )
