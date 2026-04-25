@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
    
    // Cek apakah ada postingan
    $hasPosts = !empty($data['posting']) && count($data['posting']) > 0;
@endphp

@if ($hasPosts)
<section id="recent-posts" class="recent-posts section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Berita Terbaru</h2>
        <p>{{ $data['profil']['singkatan'] }}</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-5">
            @foreach ($data['posting'] as $posting)
            <div class="col-xl-4 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="{{ env('URL_STORAGE').$posting['image'] }}" class="img-fluid" alt="">
                        <span class="post-date">{{ Carbon::parse($posting['published'])->translatedFormat('d F Y') }}</span>
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">{{ $posting['title'] }}</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">{{ $data['profil']['singkatan'] }}</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">{{ $posting['categories']['name'] }}</span>
                            </div>
                        </div>

                        <hr>

                        <a href="{{ url('/detailblog/'.$posting['slug']) }}" class="readmore stretched-link">
                            <span>Selengkapnya</span><i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div><!-- End post item -->
            @endforeach
            
            <center>
                <a href="{{ url('/page/statis/blog/') }}" class="btn btn-m btn-info" style="width:50%;">
                    <span>Lihat Semua</span>
                </a>
            </center>
        </div>
    </div>
</section>
@endif
{{-- @php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp
<section id="recent-posts" class="recent-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Berita Terbaru</h2>
        <p>{{ $data['profil']['singkatan'] }}</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">
        @foreach ($data['posting'] as $posting)
          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{ env('URL_STORAGE').$posting['image'] }}" class="img-fluid" alt="">
                <span class="post-date">{{ Carbon::parse($posting['published'])->translatedFormat('d F Y') }}</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">{{ $posting['title']}}</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">{{ $data['profil']['singkatan'] }}</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">{{ $posting['categories']['name'] }}</span>
                  </div>
                </div>

                <hr>

                <a href="{{ url( '/detailblog/' . $posting['slug']) }}" class="readmore stretched-link"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post item -->
          @endforeach
          <center><a href='{{ url( '/page/statis/blog/') }}' class='btn btn-m btn-info' style='width:50%;'><span>Lihat Semua </span></a></center>

          

        </div>

      </div>

    </section> --}}