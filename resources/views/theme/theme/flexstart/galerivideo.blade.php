@extends('theme.flexstart.layouts.app')
@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp
@section('content')
  
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <br>
                        <p>Halaman</p>
                        <h1>Galeri Video</h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/beranda') }}">Beranda</a></li>
                    <li class="current">Galeri Video</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Blog Posts Section -->
                <section id="blog-posts" class="blog-posts section">
                    <div class="container">
                        <div class="row gy-4">
                            @foreach ($galerivideo as $agelerivideo)
                                <div class="col-lg-4 col-md-6"> <!-- Menggunakan 3 kolom di layar besar (lg), 6 kolom di layar medium (md) -->
                                    <article class="h-100">
                                        <div class="post-img">
                                        <iframe class="embed-responsive-item img-fluid rounded"
                                                style="width: 100%; height: 250px; object-fit: cover;" 
                                                src="https://www.youtube.com/embed/{{ $agelerivideo['video_id'] }}" 
                                                allowfullscreen>
                                        </iframe>                                            
                                        </div>
                                        <h2 class="title">
                                            <a href="{{ $agelerivideo['url'] }}">{{ $agelerivideo['title'] }}</a>
                                        </h2>
                                        
                                    </article>
                                </div><!-- End post list item -->
                            @endforeach
                        </div><!-- End blog posts list -->
                    </div>
                </section><!-- /Blog Posts Section -->

                <!-- Blog Pagination Section -->
                <section id="blog-pagination" class="blog-pagination section">
                    <div class="container">
                        <div class="d-flex justify-content-center">
                            <ul class="pagination">
                                @if($currentPage > 1)
                                    
                                    {{-- <li>
                                        <a href="{{ $baseUrl }}?page={{ $currentPage - 1 }}" class="prev"><<</a>
                                    </li> --}}
                                @endif

                                @php
                                    $range = 2; // Number of pages to show on each side of the current page
                                    $start = max(1, $currentPage - $range);
                                    $end = min($lastPage, $currentPage + $range);

                                    // Ensure the first and last pages are always visible
                                    if ($start > 1) {
                                        echo '<li><a href="' . $baseUrl . '?page=1">1</a></li>';
                                        if ($start > 2) {
                                            echo '<li class="disabled"><span>...</span></li>';
                                        }
                                    }

                                    for ($i = $start; $i <= $end; $i++) {
                                        echo '<li class="' . ($i == $currentPage ? 'active' : '') . '"><a href="' . $baseUrl . '?page=' . $i . '">' . $i . '</a></li>';
                                    }

                                    if ($end < $lastPage) {
                                        if ($end < $lastPage - 1) {
                                            echo '<li class="disabled"><span>...</span></li>';
                                        }
                                        echo '<li><a href="' . $baseUrl . '?page=' . $lastPage . '">' . $lastPage . '</a></li>';
                                    }
                                @endphp

                                @if($currentPage < $lastPage)
                                    {{-- <li>
                                        <a href="{{ $baseUrl }}?page={{ $currentPage + 1 }}" class="next">>></a>
                                    </li> --}}
                                @endif
                            </ul>
                        </div>
                    </div>
                </section><!-- /Blog Pagination Section -->
            </div>
        </div>

            
        </div>
    </div>
@endsection
@section('description', $data['profil']['seo_desc'])
@section('keyword', $data['profil']['seo_desc'])
@section('title', 'Galeri Video')
@section('name', $data['profil']['name'])
@section('image',  env('URL_STORAGE').$data['profil']['logo'] )
