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
                        <p>Kategori</p>
                        <h1>{{ $data['categoryfirst']['name'] }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/beranda') }}">Beranda</a></li>
                    <li>Kategori</li>
                    <li class="current">{{ $data['categoryfirst']['name'] }}</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Blog Posts Section -->
                <section id="blog-posts" class="blog-posts section">
                    <div class="container">
                        <div class="row gy-4">
                            @foreach ($artikel as $aartikel)
                                <div class="col-12">
                                    <article>
                                        <div class="post-img">
                                            <img src="{{ env('URL_STORAGE').$aartikel['image'] }}" width="100%" alt="" class="img-fluid">
                                        </div>
                                        <h2 class="title">
                                            <a href="{{ url( '/detailblog/' . $aartikel['slug']) }}">{{ $aartikel['title'] }}</a>
                                        </h2>
                                        <div class="meta-top">
                                            <ul>
                                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ url( '/detailblog/' . $aartikel['slug']) }}">{{ $data['profil']['singkatan'] }}</a></li>
                                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ url( '/detailblog/' . $aartikel['slug']) }}"><time datetime="{{ Carbon::parse($aartikel['published'])->translatedFormat('d F Y') }}">{{ Carbon::parse($aartikel['published'])->translatedFormat('d F Y') }}</time></a></li>
                                            </ul>
                                        </div>
                                        <div class="content">
                                            {{-- {!! Str::limit($aartikel['description'], 150) !!} --}}
                                            <div class="read-more">
                                                <a href="{{ url( '/detailblog/' . $aartikel['slug']) }}">Selengkapnya</a>
                                            </div>
                                        </div>
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

            <div class="col-lg-4 sidebar">
                <div class="widgets-container">
                    

                    <!-- Categories Widget -->
                    <div class="categories-widget widget-item">
                        <h3 class="widget-title">Kategori</h3>
              <ul class="mt-3">
                @foreach ($data['category'] as $category)
                <li><a href="{{ url( 'page/statis/blogkategori/' . $category['name']) }}">{{ $category['name']}}</a></li>
                @endforeach
              </ul>
                    </div><!--/Categories Widget -->

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">
                        <h3 class="widget-title">Terbaru</h3>
                        @foreach ($data['new_artikel'] as $artikel)
                        <div class="post-item">
                          <img src="{{ env('URL_STORAGE').$artikel['image'] }}" width="100%" alt="" class="flex-shrink-0">
                          <div>
                            <h4><a href="{{ url( '/detailblog/' . $artikel['slug']) }}">{{ $artikel['title']}}</a></h4>
                            <time datetime="{{ Carbon::parse($artikel['published'])->translatedFormat('d F Y') }}">{{ Carbon::parse($artikel['published'])->translatedFormat('d F Y') }}</time>
                          </div>
                        </div><!-- End recent post item-->
                        @endforeach
                    </div><!--/Recent Posts Widget -->

                    <!-- Tags Widget -->
                    <div class="tags-widget widget-item">
                        <h3 class="widget-title">GPR</h3>

                        <script type="text/javascript" src="https://gpr.devaptika.web.id/gpr-bandungkab.js"></script>
                        <div id="widget-gpr-bandungkab"></div>

                    </div><!--/Tags Widget -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('description', $data['profil']['seo_desc'])
@section('keyword', $data['profil']['seo_desc'])
@section('title', $data['profil']['name'])
@section('name', $data['profil']['name'])
@section('image',  env('URL_STORAGE').$data['profil']['logo'] )
