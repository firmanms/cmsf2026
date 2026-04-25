@extends('frontend.subportal.layouts.app')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li>Halaman</li>
                </ol>
                <h2>{{ $info }}</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-12 entries">


                        <article class="entry">

                            {{-- <h2 class="entry-title">
                {{$info}}
              </h2> --}}

                            <div class="entry-meta">
                                {{-- <ul>
                  <li class="d-flex align-items-center"><a href="#"><i class="bi bi-folder"></i></a> {{$page->category->nama  }}</li>
                  <li class="d-flex align-items-center"><a href="#"><i class="bi bi-clock"></i></a> {{ \Carbon\Carbon::parse($page->publish)->format('d M Y') }}</li>
                  </ul> --}}
                            </div>

                            <div class="entry-content">
                                <!-- ======= Features Section ======= -->
                                <section id="features" class="features">

                                    <div class="container" data-aos="fade-up">

                                        <header class="section-header">
                                            <h2>Informasi</h2>
                                            <p>Sarana</p>
                                        </header>

                                        <div class="row">
                                            <div class="row feture-tabs" data-aos="fade-up">
                                                <div class="col-lg-12">
                                                    {{-- <h3>Waktu Penanganan, Prosedur dan Admin/Pengelola Pengaduan</h3> --}}

                                                    <!-- Tabs -->
                                                    <ul class="nav nav-pills mb-3">
                                                        <li>
                                                            <a class="nav-link active" data-bs-toggle="pill"
                                                                href="#tab1">Sarana</a>
                                                        </li>
                                                        <li>
                                                            <a class="nav-link" data-bs-toggle="pill"
                                                                href="#tab2">Sarana Khusus</a>
                                                        </li>
                                                        <li>
                                                            <a class="nav-link" data-bs-toggle="pill"
                                                                href="#tab3">Sarana Keamanan</a>
                                                        </li>
                                                        <li>
                                                            <a class="nav-link" data-bs-toggle="pill"
                                                                href="#tab4">Tata Tertib & Kode Etik</a>
                                                        </li>
                                                        <li>
                                                            <a class="nav-link" data-bs-toggle="pill"
                                                                href="#tab5">SI Pelayanan Publik</a>
                                                        </li>
                                                        <li>
                                                            <a class="nav-link" data-bs-toggle="pill"
                                                                href="#tab6">Visi Misi & Motto</a>
                                                        </li>
                                                        <li>
                                                            <a class="nav-link" data-bs-toggle="pill"
                                                                href="#tab7">Maklumat Pelayanan</a>
                                                        </li>
                                                    </ul><!-- End Tabs -->

                                                    <!-- Tab Content -->
                                                    <div class="tab-content">

                                                        <div class="tab-pane fade show active" id="tab1">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <b>Ruang Tunggu</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->ruang_tunggu;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Meja Layanan</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->meja_layanan;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Parkir</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->parkir;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Tempat Ibadah</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->tempat_ibadah;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Charger</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->charger;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Pojok Baca</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->pojok_baca;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Toilet</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->toilet;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div><!-- End Tab 1 Content -->

                                                        <div class="tab-pane fade show" id="tab2">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <b>Petunjuk Layanan/Papan Informasi Khusus</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->petunjuk_layanan_khusus;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Petunjuk Seperti Tanda Lansia dan Ibu Menyusui</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->petunjuk_tanda;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Narator/Audio</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->narator;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Papan Informasi Huruf Braile</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->huruf_braile;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Kursi Roda</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->kursi_roda;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Ram Rambatan</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->rambatan;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Ruang Laktasi</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->laktasi;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Toilet Disabilitas</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->toilet_disabilitas;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Kursi Prioritas</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->kursi_prioritas;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Parkir Khusus</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->parkir_khusus;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Tempat Bermain Anak</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->tempat_main;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Lantai Pemandu</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->lantai_pemandu;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- End Tab 2 Content -->

                                                        <div class="tab-pane fade show" id="tab3">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <b>Apar</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->apar;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Jalur Evakuasi</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->jalur_evakuasi;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>CCTV</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->cctv;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Petugas Keamanan</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->petugas_keamanan;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Titik Kumpul</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->titik_kumpul;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Ruang Arsip</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->ruang_arsip;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Red Button / Tombol Darurat</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->red_button;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- End Tab 3 Content -->

                                                        <div class="tab-pane fade show" id="tab4">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <b>Tata Tertib</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->tata_tertib;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <b>Kode Etik</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->kode_etik;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- End Tab 4 Content -->

                                                        <div class="tab-pane fade show" id="tab5">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <b>SI Pelayanan Publik</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->si_pelayanan_publik;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- End Tab 5 Content -->

                                                        <div class="tab-pane fade show" id="tab6">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <b>Visi</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->visi;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Misi</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->misi;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <b>Motto</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->motto;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- End Tab 6 Content -->

                                                        <div class="tab-pane fade show" id="tab7">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <b>Maklumat Pelayanan</b>
                                                                    <div class="banner-carousel owl-carousel owl-theme">
                                                                        @php
                                                                            $imageFilenames = $sarana->maklumat;
                                                                        @endphp
                                                                        @if (is_array($imageFilenames))
                                                                            @foreach ($imageFilenames as $galeri)
                                                                        <div class="slide-item">
                                                                            <img class="d-block w-100" src="{{ url('storage/'.$galeri.'') }}" alt="Third slide">
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                            Tidak Tersedia
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- End Tab 7 Content -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                        </article><!-- End blog entry -->


                    </div><!-- End blog entries list -->

                    {{-- <div class="col-lg-4">

            <div class="sidebar"> --}}

                    <!--<h3 class="sidebar-title">Search</h3>
                      <div class="sidebar-item search-form">
                        <form action="">
                          <input type="text">
                          <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                      </div> End sidebar search formn-->

                    <!--<h3 class="sidebar-title">Categories</h3>
                      <div class="sidebar-item categories">
                        <ul>
                          <li><a href="#">General <span>(25)</span></a></li>
                          <li><a href="#">Lifestyle <span>(12)</span></a></li>
                          <li><a href="#">Travel <span>(5)</span></a></li>
                          <li><a href="#">Design <span>(22)</span></a></li>
                          <li><a href="#">Creative <span>(8)</span></a></li>
                          <li><a href="#">Educaion <span>(14)</span></a></li>
                        </ul>
                      </div> End sidebar categories-->

                    {{-- <h3 class="sidebar-title">Terbaru</h3>
              <div class="sidebar-item recent-posts">
                @foreach ($recentposts as $artikelrecent)
                <div class="post-item clearfix">
                  <img src="{{ url('storage/'.$artikelrecent->image .'') }}" alt="">
                  <h4><a href="{{ url($profil->slug.'/post/'.$artikelrecent->slug.'') }}">{{ $artikelrecent->title }}</a></h4>
                  <time datetime="2020-01-01">{{ \Carbon\Carbon::parse($artikelrecent->published)->format('d M Y') }}</time>
                </div>
                @endforeach

              </div><!-- End sidebar recent posts--> --}}

                    {{-- <h5 class="sidebar-title">Government Public Relation (GPR)</h5>
              <div class="sidebar-item recent-posts">
                <div id="gpr-kominfo-widget-container"></div>
              </div><!-- End sidebar recent posts--> --}}




                    <!--<h3 class="sidebar-title">Tags</h3>
                      <div class="sidebar-item tags">
                        <ul>
                          <li><a href="#">App</a></li>
                          <li><a href="#">IT</a></li>
                          <li><a href="#">Business</a></li>
                          <li><a href="#">Mac</a></li>
                          <li><a href="#">Design</a></li>
                          <li><a href="#">Office</a></li>
                          <li><a href="#">Creative</a></li>
                          <li><a href="#">Studio</a></li>
                          <li><a href="#">Smart</a></li>
                          <li><a href="#">Tips</a></li>
                          <li><a href="#">Marketing</a></li>
                        </ul>
                      </div> End sidebar tags-->

                    {{-- </div><!-- End sidebar --> --}}

                    {{-- </div><!-- End blog sidebar --> --}}

                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->
@endsection
@section('title', $info)
@section('ogtitle', $info)
@section('description', $info)
@section('site_name', $profil->name)
@section('image', url('storage/' . $profil->logo . ''))
