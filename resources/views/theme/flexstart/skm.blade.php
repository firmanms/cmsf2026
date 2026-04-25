@extends('theme.flexstart.layouts.app')

@section('content')

<?php
// URL API
$url = "https://skm.bandungkab.go.id/api/showIKM";
$id= $data['profil']['ikm_dinas_id'] ;
// Data yang akan dikirim dalam body request
$dataa = array(
    'dinas_id' =>  $id// Pastikan input ini aman dan valid
);

// Inisialisasi cURL
$ch = curl_init($url);

// Mengatur opsi cURL untuk POST
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($dataa));

// Mengatur agar hasilnya berupa string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Pastikan SSL verifikasi diaktifkan untuk keamanan
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2); // Memastikan host sesuai dengan sertifikat SSL

// Eksekusi request dan simpan responnya
$response = curl_exec($ch);

// Cek jika terjadi error dalam eksekusi curl
if(curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
    exit;
}

// Tutup cURL
curl_close($ch);

// Cek apakah responnya valid
if ($response === false) {
    die('Error occurred while fetching data.');
}

// Parsing JSON ke array PHP
$responseData = json_decode($response, true);

// Cek apakah decoding JSON berhasil
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error decoding JSON: ' . json_last_error_msg());
}
?>

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
            <br>
              <h1>Informasi Survey Kepuasan Masyarakat</h1>
              <p class="mb-0">{{ $data['profil']['name'] }}</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ url("/beranda") }}">Beranda</a></li>
            <li class="current">Informasi Survey Kepuasan Masyarakat</li>
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

              <div class="col-md-12 icon-box">
                <i class="bi bi-house"></i>
                <div>
                  <h4>Nama Dinas</h4>
                  <p><?php echo htmlspecialchars($responseData['nm_instansi']); ?></p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-12 icon-box">
                <i class="bi bi-calendar"></i>
                <div>
                  <h4>Tahun</h4>
                  <p>{{ date('Y') }}</p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-12 icon-box">
                <i class="bi bi-journal"></i>
                <div>
                  <h4>Nilai IKM</h4>
                  <p><?php echo htmlspecialchars($responseData['nilai_ikm']); ?></p>
                </div>
              </div><!-- End Feature Item -->

              <div class="col-md-12 icon-box">
                <i class="bi bi-journal-check"></i>
                <div>
                  <h4>Mutu IKM</h4>
                  <p><?php echo htmlspecialchars($responseData['nilai_mutu_ikm']); ?></p>
                </div>
              </div><!-- End Feature Item -->

            </div>

          </div>

          <div class="col-xl-5 d-flex align-items-center order-1 order-xl-2" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ url('storage/luar/features-1.png') }}" class="img-fluid" alt="">
          </div>
        
        </div>

      </div>
      <center>Sumber data: https://skm.bandungkab.go.id/</center>

    </section><!-- /Alt Features Section -->
    
@endsection
@section('description', $data['profil']['seo_desc'])
@section('keyword', $data['profil']['seo_desc'])
@section('title', 'Informasi SKM')
@section('name', $data['profil']['name'])
@section('image',  env('URL_BACKEND')."storage/".$data['profil']['logo'] )