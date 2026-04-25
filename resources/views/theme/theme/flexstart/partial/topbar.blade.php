<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ url('/beranda') }}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ env('URL_BACKEND')."/storage/".$data['profil']['logo'] }}" alt="">
        {{-- <h1 class="sitename">FlexStart</h1> --}}
      </a>

      <nav id="navmenu" class="navmenu">
       
        
         @if(is_array($data['menus']) && count($data['menus']) > 0)
        <ul>
        <li><a href="{{ url('/beranda') }}">Beranda</a></li>
        <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul class="dd-box-shadow">
                <li><a href="{{ url( '/page/statis/sejarah') }}">Sejarah</a></li>
                <li><a href="{{ url( '/page/statis/visimisi') }}">Visi dan Misi</a></li>
                <li><a href="{{ url( '/page/statis/tupoksi') }}">Tupoksi</a></li>
                <li><a href="{{ url( '/page/statis/struktur') }}">Struktur Organisasi</a></li>
                <li><a href="{{ url( '/page/statis/sambutan') }}">Sambutan Pimpinan</a></li>
                </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul class="dd-box-shadow">
                <li><a href="{{ url( '/page/statis/blog') }}">Berita</a></li>
                <li><a href="{{ url( '/page/statis/layanan') }}">Layanan</a></li>
                <li><a href="{{ url( '/page/statis/sarana') }}">Sarana dan Prasarana</a></li>
                <li><a href="{{ url( '/page/statis/pengaduan') }}">Pengaduan</a></li>
                <li><a href="{{ url( '/page/statis/skm') }}">Indek Kepuasan Masyarakat</a></li>
                </ul>
        </li>
            @foreach($data['menus'] as $nodeId => $node)
            @if(isset($node['children']) && is_array($node['children']) && count($node['children']) > 0)
                <li class="dropdown">
                <a href="#"><span>{{ $node['label'] }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul class="dd-box-shadow">
                    @foreach($node['children'] as $childId => $child)
                    @if (false===strpos($child['link'],'http'))
                    <li><a href="{{ url( '/page/' . $child['link']) }}">{{ $child['label'] }}</a></li>
                    @else
                    <li><a href="{{ url($child['link']) }}">{{ $child['label'] }}</a></li>
                    @endif
                    @endforeach
                </ul>
                </li>
            @else

                @if (false===strpos($node['link'],'http'))
                <li><a href="{{ url( '/page/' . $node['link']) }}">{{ $node['label'] }}</a></li>
                @else
                <li><a href="{{url($node['link']) }}">{{ $node['label'] }}</a></li>
                @endif
            @endif
            @endforeach

            <li class="dropdown"><a href="#"><span>Dokumen</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul class="dd-box-shadow">
                <li><a href="{{ url( '/page/statis/dokumenupload') }}">Dokumen Upload</a></li>
                <li><a href="{{ url( '/page/statis/produkhukum') }}">Produk Hukum</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul class="dd-box-shadow">
                <li><a href="{{ url( '/page/statis/galeri') }}">Galeri Foto</a></li>
                <li><a href="{{ url( '/page/statis/galerivideo') }}">Galeri Video</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Kontak kami</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul class="dd-box-shadow">
                <li><a href="{{ url( '/page/statis/bukutamu') }}">Buku Tamu</a></li>
                </ul>
            </li>
       

        </ul>
        @else
        <ul>
        <li><a href="{{ url('/beranda') }}">Beranda</a></li>
        <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul class="dd-box-shadow">
                <li><a href="{{ url( '/page/statis/sejarah') }}">Sejarah</a></li>
                <li><a href="{{ url( '/page/statis/visimisi') }}">Visi dan Misi</a></li>
                <li><a href="{{ url( '/page/statis/tupoksi') }}">Tupoksi</a></li>
                <li><a href="{{ url( '/page/statis/struktur') }}">Struktur Organisasi</a></li>
                <li><a href="{{ url( '/page/statis/sambutan') }}">Sambutan Pimpinan</a></li>
                @if (true===strpos($data['profil']['video_profile'],'http'))
                <li><a href="{{ $data['profil']['video_profile'] }}">Video Profil</a></li>
                @endif
                </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul class="dd-box-shadow">
                <li><a href="{{ url( '/page/statis/blog') }}">Berita</a></li>
                <li><a href="{{ url( '/page/statis/layanan') }}">Layanan</a></li>
                <li><a href="{{ url( '/page/statis/sarana') }}">Sarana dan Prasarana</a></li>
                <li><a href="{{ url( '/page/statis/pengaduan') }}">Pengaduan</a></li>
                <li><a href="{{ url( '/page/statis/skm') }}">Indek Kepuasan Masyarakat</a></li>
                </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Dokumen</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul class="dd-box-shadow">
                <li><a href="{{ url( '/page/statis/dokumenupload') }}">Dokumen Upload</a></li>
                <li><a href="{{ url( '/page/statis/produkhukum') }}">Produk Hukum</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul class="dd-box-shadow">
                <li><a href="{{ url( '/page/statis/galeri') }}">Galeri Foto</a></li>
                <li><a href="{{ url( '/page/statis/galerivideo') }}">Galeri Video</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Kontak kami</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul class="dd-box-shadow">
                <li><a href="{{ url( '/page/statis/bukutamu') }}">Buku Tamu</a></li>
                </ul>
            </li>
       

        </ul>
        @endif
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
        
      {{-- <a class="btn-getstarted flex-md-shrink-0" href="index.html#about">Get Started</a> --}}

    </div>
  </header>