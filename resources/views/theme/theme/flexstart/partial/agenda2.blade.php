@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
    
    // Cek apakah ada agenda
    $hasAgenda = !empty($data['agenda']) && count($data['agenda']) > 0;
@endphp

@if ($hasAgenda)
<section id="recent-posts" class="recent-posts section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Agenda</h2>
        <p>{{ $data['profil']['singkatan'] }}</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-5">
            @foreach ($data['agenda'] as $agenda)
            <div class="col-xl-4 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="{{ env('URL_STORAGE').$agenda['image'] }}" class="img-fluid" alt="">
                        <span class="post-date">{{ Carbon::parse($agenda['published'])->translatedFormat('d F Y') }}</span>
                    </div>

                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">{{ $agenda['title'] }}</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-clock"></i> 
                                <span class="ps-2">{{ Carbon::parse($agenda['time'])->translatedFormat('H:i') }} WIB</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-geo-alt"></i> 
                                <span class="ps-2">{{ $agenda['location'] }}</span>
                            </div>
                        </div>
                        
                        {{ $agenda['description'] }}
                    </div>
                </div>
            </div><!-- End post item -->
            @endforeach
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
        <h2>Agenda</h2>
        <p>{{ $data['profil']['singkatan'] }}</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">
        @foreach ($data['agenda'] as $agenda)
          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

              <div class="post-img position-relative overflow-hidden">
                <img src="{{ env('URL_STORAGE').$agenda['image'] }}" class="img-fluid" alt="">
                <span class="post-date">{{ Carbon::parse($agenda['published'])->translatedFormat('d F Y') }}</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">{{ $agenda['title']}}</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-clock"></i> <span class="ps-2">{{ Carbon::parse($agenda['time'])->translatedFormat('H:i') }} WIB</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-geo-alt"></i> <span class="ps-2">{{ $agenda['location']}}</span>
                  </div>
                </div>
                {{ $agenda['description']}}
                

              </div>

            </div>
          </div><!-- End post item -->
          @endforeach
          

          

        </div>

      </div>

    </section> --}}