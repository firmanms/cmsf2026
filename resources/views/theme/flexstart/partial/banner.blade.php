<section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Program Unggulan dan Informasi</h2>
        <p>{{ $data['profil']['singkatan'] }}</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
             @foreach ($data['kategori_banner'] as $kategori_banner)
            <li data-filter=".filter-{{ $kategori_banner['kategori'] }}">{{ $kategori_banner['kategori'] }}</li>
            @endforeach
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($data['banner'] as $banner)
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $banner['kategori'] }}">
              <div class="portfolio-content h-100">
                <img src="{{ env('URL_BACKEND')."/storage/".$banner['image'] }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/app-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            @endforeach

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section>