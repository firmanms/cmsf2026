@extends('theme.flexstart.layouts.app')

@section('content')
@php
    use Carbon\Carbon;
    Carbon::setLocale('id');
@endphp

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
            <br>
              <h1>{{ $data['detail_blog']['title'] }}</h1>
              {{-- <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p> --}}
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ url("/beranda") }}">Beranda</a></li>
            <li class="current">{{ $data['detail_blog']['title'] }}</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-8">

          <!-- Blog Details Section -->
          <section id="blog-details" class="blog-details section">
            <div class="container">

              <article class="article">

                <div class="post-img">
                  <img src="{{ env('URL_STORAGE').$data['detail_blog']['image'] }}" width="100%" alt="" class="img-fluid">
                </div>

                <h2 class="title">{{ $data['detail_blog']['title'] }}</h2>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ url( '/detailblog/' . $data['detail_blog']['slug']) }}">{{ $data['profil']['singkatan'] }}</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ url( '/detailblog/' . $data['detail_blog']['slug']) }}"><time datetime="{{ Carbon::parse($data['detail_blog']['published'])->translatedFormat('d F Y') }}">{{ Carbon::parse($data['detail_blog']['published'])->translatedFormat('d F Y') }}</time></a></li>
                  </ul>
                </div><!-- End meta top -->

                <div class="content" style="max-width: 100%;max-height: 100%;overflow: auto;box-sizing: border-box; ">
                  @php
                      $htmlContent = $data['detail_blog']['description'];
                      $absoluteUrl = env('URL_STORAGE');
                      $relativePath = '/storage/';

                      $updatedHtmlContent = str_replace($relativePath, $absoluteUrl, $htmlContent);
                  @endphp

                  {!! $updatedHtmlContent !!}

                </div><!-- End post content -->

                <div class="meta-bottom">
                  <i class="bi bi-folder"></i>
                  <ul class="cats">
                    <li><a href="#">{{ $data['category_blog']['name'] }}</a></li>
                  </ul>
                </div><!-- End meta bottom -->

              </article>

            </div>
          </section><!-- /Blog Details Section -->

        </div>

        <div class="col-lg-4 sidebar">

          <div class="widgets-container">

            <!-- Search Widget 
            <div class="search-widget widget-item">

              <h3 class="widget-title">Search</h3>
              <form action="">
                <input type="text">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
              </form>

            </div>/Search Widget -->

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
              @foreach ($data['artikel'] as $artikel)
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
@section('title', $data['detail_blog']['title'])
@section('name', $data['profil']['name'])
@section('image',  env('URL_STORAGE').$data['detail_blog']['image'] )