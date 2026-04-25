<section id="stats" class="stats section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Statistik Kunjungan Website</h2>
        <p>{{ $data['profil']['singkatan'] }}</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-person-fill color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="{{ $data['dailyVisitors'] }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Kunjungan Hari ini</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-4 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people-fill color-orange flex-shrink-0" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="{{ $data['allVisitors'] }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Total Kunjungan</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-4 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-file-bar-graph-fill color-green flex-shrink-0" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="{{ $data['viewCount']['count'] }}" data-purecounter-duration="1" class="purecounter"></span>
                <p>Total View</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section>