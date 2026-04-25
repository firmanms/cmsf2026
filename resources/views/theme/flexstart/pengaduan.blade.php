@extends('theme.flexstart.layouts.app')

@section('content')

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
            <br>
              <h1>Informasi Pengaduan</h1>
              {{-- <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p> --}}
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ url("/beranda") }}">Beranda</a></li>
            <li class="current">Pengaduan</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Alt Features Section -->
    <section id="alt-features" class="alt-features section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-7 d-flex order-2 order-xl-1" data-aos="fade-up" data-aos-delay="200">

            <div class="row align-self-center gy-5">

              <div class="col-md-6 icon-box">
                <i class="bi bi-box"></i>
                <div>
                  <h4>Kotak Pengaduan</h4>
                  <p>{{ $data['pengaduan']['kotak'] }}</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <i class="bi bi-exclamation-lg"></i>
                <div>
                  <h4>SP4N LAPOR!</h4>
                  <p>{{ $data['pengaduan']['lapor'] }}</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <i class="bi bi-telephone"></i>
                <div>
                  <h4>Fax</h4>
                  <p>{{ $data['pengaduan']['fax'] }}</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <i class="bi bi-telephone"></i>
                <div>
                  <h4>Telepon</h4>
                  <p>{{ $data['pengaduan']['telp'] }}</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <i class="bi bi-whatsapp"></i>
                <div>
                  <h4>Whatsapp</h4>
                  <p>{{ $data['pengaduan']['wa'] }}</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <i class="bi bi-envelope"></i>
                <div>
                  <h4>Email</h4>
                  <p>{{ $data['pengaduan']['email'] }}</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <i class="bi bi-facebook"></i>
                <div>
                  <h4>Facebook</h4>
                  <p><a href="{{ $data['pengaduan']['link_fb'] }}">{{ $data['pengaduan']['link_fb'] }}</a></p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <i class="bi bi-twitter"></i>
                <div>
                  <h4>Twitter</h4>
                  <p><a href="{{ $data['pengaduan']['link_tw'] }}">{{ $data['pengaduan']['link_tw'] }}</a></p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <i class="bi bi-instagram"></i>
                <div>
                  <h4>Instagram</h4>
                  <p><a href="{{ $data['pengaduan']['link_ig'] }}">{{ $data['pengaduan']['link_ig'] }}</a></p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-6 icon-box">
                <i class="bi bi-tiktok"></i>
                <div>
                  <h4>Tiktok</h4>
                  <p><a href="{{ $data['pengaduan']['link_tiktok'] }}">{{ $data['pengaduan']['link_tiktok'] }}</a></p>
                </div>
              </div><!-- End Feature Item -->

            </div>

          </div>

          <div class="col-xl-5 d-flex align-items-center order-1 order-xl-2" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ url('storage/luar/features-1.png') }}" class="img-fluid" alt="">
          </div>

        </div>

      </div>

      <br>
      <br>

      <div class="container">
      <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">

            <div class="col-lg-6">
                <img src="{{ url('storage/luar/features-2.png') }}" class="img-fluid" alt="">
            </div>
            
            <div class="col-lg-6">
                <h3>Waktu Penanganan, Prosedur dan Admin/Pengelola Pengaduan</h3>

                <!-- Tabs -->
                <ul class="nav nav-pills mb-3">
                    <li>
                        <a class="nav-link active" data-bs-toggle="pill"
                            href="#tab1">Jangka Waktu</a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="pill"
                            href="#tab2">Mekanisme/Prosedur</a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="pill"
                            href="#tab3">admin/Pengelola</a>
                    </li>
                </ul><!-- End Tabs -->

                <!-- Tab Content -->
                <div class="tab-content">

                    <div class="tab-pane fade show active" id="tab1" style="max-width: 100%;max-height: 100%;overflow: auto;box-sizing: border-box; ">
                        
                        @php
                        $htmlContent = $data['pengaduan']['jangka_waktu'] ;
                        $absoluteUrl = env('URL_BACKEND').'storage/';
                        $relativePath = '/storage/';

                        $updatedHtmlContent = str_replace($relativePath, $absoluteUrl, $htmlContent);
                    @endphp

                    {!! $updatedHtmlContent !!}
                    </div><!-- End Tab 1 Content -->

                    <div class="tab-pane fade show" id="tab2" style="max-width: 100%;max-height: 100%;overflow: auto;box-sizing: border-box; ">
                        
                        @php
                        $htmlContent = $data['pengaduan']['prosedur'] ;
                        $absoluteUrl = env('URL_BACKEND').'storage/';
                        $relativePath = '/storage/';

                        $updatedHtmlContent = str_replace($relativePath, $absoluteUrl, $htmlContent);
                    @endphp

                    {!! $updatedHtmlContent !!}
                    </div><!-- End Tab 2 Content -->

                    <div class="tab-pane fade show" id="tab3" style="max-width: 100%;max-height: 100%;overflow: auto;box-sizing: border-box; ">
                        
                        @php
                        $htmlContent = $data['pengaduan']['pengelola'] ;
                        $absoluteUrl = env('URL_BACKEND').'storage/';
                        $relativePath = '/storage/';

                        $updatedHtmlContent = str_replace($relativePath, $absoluteUrl, $htmlContent);
                    @endphp

                    {!! $updatedHtmlContent !!}
                    </div><!-- End Tab 3 Content -->

                </div>

            </div>

        </div><!-- End Feature Tabs -->
      </div>

      <br><br>

      <div class="container">

        <div class="col-lg-12">
            <center><h3>Informasi dan Perkembangan Penanganan Pengaduan</h3></center>

            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($data['pengaduan']['image'] as $index => $image)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                    <img src="{{ env('URL_BACKEND')."/storage/".$image }}" class="d-block w-100" alt="...">
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
        
      </div>

    </section><!-- /Alt Features Section -->
    
@endsection
@section('description', $data['profil']['seo_desc'])
@section('keyword', $data['profil']['seo_desc'])
@section('title', 'Informasi Pengaduan')
@section('name', $data['profil']['name'])
@section('image',  env('URL_BACKEND')."storage/".$data['profil']['logo'] )
