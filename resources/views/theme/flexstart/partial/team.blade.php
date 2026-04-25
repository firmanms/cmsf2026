@php
    // Cek apakah ada data pegawai
    $hasEmployees = !empty($data['employee']) && count($data['employee']) > 0;
@endphp

@if ($hasEmployees)
<!-- Team Section -->
<section id="team" class="team section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Pegawai</h2>
    <p>{{ $data['profil']['singkatan'] }}</p>
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
              "slidesPerView": 1,
              "spaceBetween": 20
            },
            "480": {
              "slidesPerView": 2,
              "spaceBetween": 30
            },
            "640": {
              "slidesPerView": 3,
              "spaceBetween": 40
            },
            "992": {
              "slidesPerView": 4,
              "spaceBetween": 50
            }
          }
        }
      </script>
      <div class="swiper-wrapper align-items-center">
        @foreach($data['employee'] as $pegawai)
        <div class="swiper-slide">
          <div class="team-member">
            <div class="member-img">
              <img src="{{ env('URL_STORAGE').$pegawai['image'] }}" class="img-fluid" alt="">
              <div class="social">
                @if($pegawai['tiktok'])
                <a href="https://tiktok.com/{{ $pegawai['tiktok'] }}"><i class="bi bi-tiktok"></i></a>
                @endif
                @if($pegawai['facebook'])
                <a href="https://facebook.com/{{ $pegawai['facebook'] }}"><i class="bi bi-facebook"></i></a>
                @endif
                @if($pegawai['instagram'])
                <a href="https://instagram.com/{{ $pegawai['instagram'] }}"><i class="bi bi-instagram"></i></a>
                @endif
              </div>
            </div>
            <div class="member-info">
              <h4>{{ $pegawai['name'] }}</h4>
              <span>{{ $pegawai['position'] }}</span>
              <p>{{ $pegawai['description'] }}</p>
            </div>
          </div>
        </div><!-- End Team Member -->
        @endforeach

      </div><!-- End Swiper Wrapper -->
    </div><!-- End Swiper -->

  </div>

</section><!-- /Team Section -->
@endif
{{-- <!-- Team Section -->
<section id="team" class="team section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Pegawai</h2>
    <p>{{ $data['profil']['singkatan'] }}</p>
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
              "slidesPerView": 1,
              "spaceBetween": 20
            },
            "480": {
              "slidesPerView": 2,
              "spaceBetween": 30
            },
            "640": {
              "slidesPerView": 3,
              "spaceBetween": 40
            },
            "992": {
              "slidesPerView": 4,
              "spaceBetween": 50
            }
          }
        }
      </script>
      <div class="swiper-wrapper align-items-center">
        @foreach($data['employee'] as $pegawai)
        <div class="swiper-slide">
          <div class="team-member">
            <div class="member-img">
              <img src="{{ env('URL_STORAGE').$pegawai['image'] }}" class="img-fluid" alt="">
              <div class="social">
                <a href="https://tiktok.com/{{ $pegawai['tiktok'] }}"><i class="bi bi-tiktok"></i></a>
                <a href="https://facebook.com/{{ $pegawai['facebook'] }}"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/{{ $pegawai['instagram'] }}"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>{{$pegawai['name']  }}</h4>
              <span>{{$pegawai['position']  }}</span>
              <p>{{ $pegawai['description']  }}</p>
            </div>
          </div>
        </div><!-- End Team Member -->
        @endforeach

      </div><!-- End Swiper Wrapper -->
      <!-- <div class="swiper-pagination"></div> -->
    </div><!-- End Swiper -->

  </div>

</section><!-- /Team Section --> --}}
