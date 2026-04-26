<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Website - {{ $data['profil']['name'] }}</title>
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keyword')">
  <meta property="og:title" content="@yield('title')">
  <meta property="og:description" content="@yield('description')">
  <meta property="og:site_name" content="@yield('name')">
  <meta property="og:image" content="@yield('image')">

  <!-- Favicons -->
  <link href="{{ env('URL_STORAGE').$data['profil']['favicon'] }}" rel="icon">
  <link href="{{ asset("theme/flexstart/assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("theme/flexstart/assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{ asset("theme/flexstart/assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
  <link href="{{ asset("theme/flexstart/assets/vendor/aos/aos.css")}}" rel="stylesheet">
  <link href="{{ asset("theme/flexstart/assets/vendor/glightbox/css/glightbox.min.css")}}" rel="stylesheet">
  <link href="{{ asset("theme/flexstart/assets/vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset("theme/flexstart/assets/css/main.css")}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Updated: Nov 01 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    /* Target hanya gambar di dalam container ini */
    .container[data-aos="fade-up"] img {
      max-width: 100% !important;
      width: 100% !important;
      height: auto !important;
      display: block;
    }
  </style>
</head>

<body class="index-page">

  <!--header -->
  @include('theme.flexstart.partial.topbar')
  <!--end header -->

  <main class="main">

    @yield('content')

  </main>

  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          {{-- <div class="col-lg-6">
          <h4>Join Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div> --}}
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">

        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ url('/beranda') }}" class="d-flex align-items-center">
            <span class="sitename">{{ $data['profil']['name'] }}</span>
          </a>
          <div class="footer-contact pt-3">
            <p>{{ $data['profil']['office_address'] }}</p>
            <p class="mt-3"><strong>Telp:</strong> <span>{{ $data['profil']['office_telp'] }}</span></p>
            <p class="mt-3"><strong>Whatsapp:</strong> <span>{{ $data['profil']['office_whatsapp'] }}</span></p>
            <p class="mt-3"><strong>Email:</strong> <span>{{ $data['profil']['office_email'] }}</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          {{-- <h4>Useful Links</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
        </ul> --}}
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          {{-- <h4>Our Services</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
        </ul> --}}
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Ikuti Kami</h4>
          {{-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> --}}

          <div class="social-links d-flex">
            <a href="{{ $data['profil']['tw'] }}"><i class="bi bi-twitter-x"></i></a>
            <a href="{{ $data['profil']['fb'] }}"><i class="bi bi-facebook"></i></a>
            <a href="{{ $data['profil']['ig'] }}"><i class="bi bi-instagram"></i></a>
            <a href="{{ $data['profil']['channel_yt'] }}"><i class="bi bi-youtube"></i></a>
            <a href="{{ $data['profil']['tiktok'] }}"><i class="bi bi-tiktok"></i></a>
            <!-- </div> <div class="visitor-stats mt-4 pt-3 border-top">
          <h4 class="fs-5 mb-3">Statistik Pengunjung</h4>
          <div id="stat-container" class="text-sm">
            <span class="text-muted">Memuat data...</span>
          </div>
        </div> -->
          </div>

        </div>
      </div>
      <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">{{ $data['profil']['singkatan'] }} X Diskominfo </strong> <span></span></p>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>

  </footer>

  <!-- <script>
  document.addEventListener("DOMContentLoaded", function() {
    // 1. URL Web App kamu
    const scriptUrl = 'https://script.google.com/macros/s/AKfycbxrsGdsZuYL9-pnOrQfYqYrdmJ6mlXMIggg37y9AnKfgWbDsrUoWdNO-RPcNSB4rkD91Q/exec'; 
    const dinas = 'disdukcapil'; 

    // ---- BAGIAN A: KIRIM HIT UNTUK MENAMBAH DATA STATISTIK OTOMATIS ----
    fetch(scriptUrl, {
      method: 'POST',
      headers: { 'Content-Type': 'text/plain' }, 
      body: JSON.stringify({ dinas: dinas, action: 'hit' })
    })
    .then(() => {
      // ---- BAGIAN B: SETELAH HIT BERHASIL, AMBIL DATA TERBARU UNTUK DITAMPILKAN ----
      return fetch(`${scriptUrl}?dinas=${dinas}`);
    })
    .then(response => response.json())
    .then(res => {
      const container = document.getElementById('stat-container');
      
      if (res.status === 'success' && res.data.length > 0) {
        const latestData = res.data[res.data.length - 1];
        
        // --- BIKIN ANGKA RANDOM SEDANG ONLINE (8 sampai 100) ---
        const minOnline = 8;
        const maxOnline = 30;
        const fakeOnline = Math.floor(Math.random() * (maxOnline - minOnline + 1)) + minOnline;
        
        container.innerHTML = `
          <ul class="list-unstyled mb-0">
            <li class="d-flex justify-content-between mb-2">
              <span><i class="bi bi-globe me-2"></i>Sedang Online</span>
              <strong>${fakeOnline}</strong> </li>
            <li class="d-flex justify-content-between mb-2">
              <span><i class="bi bi-people me-2"></i>Pengunjung Hari Ini</span>
              <strong>${latestData.visitor}</strong>
            </li>
            <li class="d-flex justify-content-between">
              <span><i class="bi bi-eye me-2"></i>Total Page View</span>
              <strong>${latestData.page_view}</strong>
            </li>
          </ul>
          <small class="text-muted d-block mt-2">Update terakhir: ${new Date(latestData.tgl).toLocaleDateString('id-ID')}</small>
        `;
      } else {
        container.innerHTML = '<span class="text-danger">Data statistik belum tersedia.</span>';
      }
    })
    .catch(error => {
      console.error('Error statistik:', error);
      document.getElementById('stat-container').innerHTML = '<span class="text-muted">Gagal merekam statistik.</span>';
    });
  });
</script> -->

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset("theme/flexstart/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{ asset("theme/flexstart/assets/vendor/php-email-form/validate.js")}}"></script>
  <script src="{{ asset("theme/flexstart/assets/vendor/aos/aos.js")}}"></script>
  <script src="{{ asset("theme/flexstart/assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
  <script src="{{ asset("theme/flexstart/assets/vendor/purecounter/purecounter_vanilla.js")}}"></script>
  <script src="{{ asset("theme/flexstart/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js")}}"></script>
  <script src="{{ asset("theme/flexstart/assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
  <script src="{{ asset("theme/flexstart/assets/vendor/swiper/swiper-bundle.min.js")}}"></script>

  <!-- Main JS File -->
  <script src="{{ asset("theme/flexstart/assets/js/main.js")}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sienna-accessibility@latest/dist/sienna-accessibility.umd.js" defer></script>
  <!-- GetButton.io widget -->
  <script type="text/javascript">
    (function() {
      var a = "<?php echo $data['profil']['office_whatsapp']; ?>";
      var b = "<?php echo $data['profil']['office_telp']; ?>";
      var options = {
        whatsapp: a, // Ganti dengan nomor WhatsApp Anda
        call: b, // Ganti dengan nomor WhatsApp And
        call_to_action: "Hubungi kami", // Pesan yang akan muncul di tombol
        position: "right", // Posisi tombol (left atau right)
      };
      var proto = document.location.protocol,
        host = "getbutton.io",
        url = proto + "//static." + host;
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = url + '/widget-send-button/js/init.js';
      s.onload = function() {
        WhWidgetSendButton.init(host, proto, options);
      };
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    })();
  </script>

  <!-- /GetButton.io widget -->

</body>

</html>