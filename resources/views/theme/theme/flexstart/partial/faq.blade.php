@php
    // Cek apakah ada data FAQ
    $hasFaq = !empty($data['faq']) && count($data['faq']) > 0;
@endphp

@if ($hasFaq)
<section id="faq" class="faq section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Pertanyaan Umum</h2>
        <p>{{ $data['profil']['singkatan'] }}</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="faq-container">
                    @foreach($data['faq'] as $faq)
                    <div class="faq-item">
                        <h3>{!! $faq['question'] !!}</h3>
                        <div class="faq-content">
                            <p>{!! $faq['answer'] !!}</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->
                    @endforeach
                </div>
            </div><!-- End Faq Column-->
        </div>
    </div>
</section>
@endif
{{-- <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pertanyaan Umum</h2>
        <p>{{ $data['profil']['singkatan'] }}</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              @foreach($data['faq'] as $faq)
              <div class="faq-item">
                <h3>{!! $faq['question'] !!}</h3>
                <div class="faq-content">
                  <p>{!! $faq['answer'] !!}</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->
              @endforeach

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section> --}}