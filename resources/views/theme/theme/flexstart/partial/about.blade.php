<section id="about" class="about section">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              
              <h2>Sambutan</h2>
              <p align="justify">
                {!! $data['profil']['welcome'] !!}
              </p>
              <h3>{{ $data['profil']['leader_name'] }}</h3>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>{{ $data['profil']['nickname'] }}</span>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ env('URL_BACKEND')."/storage/".$data['profil']['leader_foto'] }}" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section>