@extends('theme.flexstart.layouts.app')

@section('content')

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
            <br>
              <h1>Informasi Sarana</h1>
              {{-- <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p> --}}
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ url("/beranda") }}">Beranda</a></li>
            <li class="current">Informasi Sarana</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <div class="container">

        <div class="row">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#sarana">Sarana</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#saranakhusus">Sarana Khusus</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#saranakeamanan">Sarana Keamanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tatatertib">Tata Tertib dan Kode Etik</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#si">SI Pelayanan Publik</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#visi">Visi, Misi dan Motto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#maklumat">Maklumat</a>
            </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
            <div class="tab-pane container active" id="sarana">
                <div class="row">
                    <div class="col-lg-4 mt-3">

                        <div class="card">
                            <h6 class="card-header">Ruang Tunggu</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['ruang_tunggu'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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
                        
                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Meja Layanan</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['meja_layanan'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Parkir</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['parkir'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Tempat Ibadah</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['tempat_ibadah'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Charger</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['charger'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Pojok Baca</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['pojok_baca'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Toilet</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['toilet'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                </div>
            </div>

            <div class="tab-pane container fade" id="saranakhusus">

                <div class="row">
                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Petunjuk Layanan/Papan Informasi Khusus</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['petunjuk_layanan_khusus'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Petunjuk Tanda Lansia / Ibu Menyusui</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['petunjuk_tanda'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Narator/Audio</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['narator'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Papan Informasi Huruf Braile</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['huruf_braile'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Kursi Roda</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['kursi_roda'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Rambatan</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['rambatan'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Ruang Laktasi</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['laktasi'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Kursi Prioritas</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['kursi_prioritas'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Parkir Khusus</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['parkir_khusus'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Tempat Bermain Anak</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['tempat_main'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Lantai Pemandu</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['lantai_pemandu'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                </div>

            </div>
            <div class="tab-pane container fade" id="saranakeamanan">
                
                <div class="row">
                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Apar</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['apar'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Jalur Evakuasi</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['jalur_evakuasi'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">CCTV</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['cctv'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Petugas Keamanan</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['petugas_keamanan'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Titik Kumpul</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['titik_kumpul'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Ruang Arsip</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['ruang_arsip'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Red Button / Tombol Darurat</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['red_button'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                </div>
            
            </div>
            <div class="tab-pane container fade" id="tatatertib">

                <div class="row">
                    <div class="col-lg-6 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Tata Tertib</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['tata_tertib'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-6 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Kode Etik</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['kode_etik'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                </div>
            
            </div>
            <div class="tab-pane container fade" id="si">

                <div class="row">
                    <div class="col-lg-12 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Sistem Informasi Pelayanan Publik</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['si_pelayanan_publik'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>
                </div>

            </div>
            <div class="tab-pane container fade" id="visi">

                <div class="row">
                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Visi</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['visi'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Misi</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['misi'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                    <div class="col-lg-4 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Motto</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['motto'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>

                </div>

            </div>            
            <div class="tab-pane container fade" id="maklumat">

                <div class="row">
                    <div class="col-lg-12 mt-3">
                        
                        <div class="card">
                            <h6 class="card-header">Maklumat</h6>
                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($data['facilities']['maklumat'] as $index => $image)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"  data-bs-interval="2000">
                                        <img src="{{ env('URL_STORAGE').$image }}" class="d-block w-100" alt="...">
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

                    </div>
                </div>
            
            </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    
@endsection
@section('description', $data['profil']['seo_desc'])
@section('keyword', $data['profil']['seo_desc'])
@section('title', 'Informasi Sarana')
@section('name', $data['profil']['name'])
@section('image',  env('URL_STORAGE').$data['profil']['logo'] )