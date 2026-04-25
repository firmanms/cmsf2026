
@php
    // Kelompokkan banner berdasarkan kategori
    $groupedBanners = [];
    foreach ($data['banner'] as $banner) {
        $groupedBanners[$banner['kategori']][] = $banner;
    }
@endphp

@foreach ($data['kategori_banner'] as $kategori_banner)
    @if (isset($groupedBanners[$kategori_banner['kategori']]) && count($groupedBanners[$kategori_banner['kategori']]) > 0)
    <section id="values" class="values section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ $kategori_banner['kategori'] }}</h2>
            <p>{{ $data['profil']['singkatan'] }}<br></p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                @foreach ($groupedBanners[$kategori_banner['kategori']] as $banner)
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="{{ env('URL_BACKEND').'/storage/'.$banner['image'] }}" class="img-fluid" alt="">
                            <a href="{{ $banner['url'] }}"><h3>{{ $banner['title'] }}</h3></a>
                            <p>{{ $banner['description'] }}</p>
                        </div>
                    </div><!-- End Card Item -->
                @endforeach
            </div>
        </div>
    </section>
    @endif
@endforeach
{{-- @foreach ($data['kategori_banner'] as $kategori_banner)
<section id="values" class="values section">
    
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{ $kategori_banner['kategori'] }}</h2>
        <p>{{ $data['profil']['singkatan'] }}<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
                    
            @foreach ($data['banner'] as $banner)
                @if ($banner['kategori'] == $kategori_banner['kategori'])
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="{{ env('URL_BACKEND')."/storage/".$banner['image'] }}" class="img-fluid" alt="">
                            <a href="{{ $banner['url'] }}"><h3>{{ $banner['title'] }}</h3></a>
                            <p>{{ $banner['description'] }}</p>
                        </div>
                    </div><!-- End Card Item -->
                @endif
            @endforeach
        </div>

      </div>

    </section>
@endforeach --}}