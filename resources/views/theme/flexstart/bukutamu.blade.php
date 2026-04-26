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
                    {{-- <h1>{{ $data['page']['title'] }}</h1> --}}
                    {{-- <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p> --}}
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ url("/beranda") }}">Beranda</a></li>
                <li class="current">Buku Tamu</li>
            </ol>
        </div>
    </nav>
</div><!-- End Page Title -->

<!-- Starter Section Section -->

<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Halaman</h2>
        <p>Buku Tamu</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-12">

            <div class="col-lg-4">

                <div class="row gy-12">
                    <div class="col-md-12">
                        <div class="info-item" data-aos="fade" data-aos-delay="200">
                            <h3 style="text-align: justify;">Silakan mengisi buku tamu kami. Mohon masukan dan saran disampaikan secara bijak dengan kata-kata yang baik. Seluruh komentar yang masuk akan kami moderasi terlebih dahulu sebelum ditampilkan. Komentar yang berupa spam, kata-kata kotor, link tidak bermanfaat tidak akan kami tampilkan. Terimakasih.</h3>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>

            <div class="col-lg-8">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                <form action="{{ route('bukutamu.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="idprofil" value="{{ $data['profil']['id'] }}">
                    <div class="row gy-4">


                        <div class="col-md-6">
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Nama" required maxlength="100"
                                class="@error('name') is-invalid @enderror">
                            @error('name')
                            <div style="color:red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required maxlength="100"
                                class="@error('email') is-invalid @enderror">
                            @error('email')
                            <div style="color:red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <textarea name="message" placeholder="Pesan" class="form-control" rows="7" required minlength="10" maxlength="1000"
                                class="@error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                            @error('message')
                            <div style="color:red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text">Berapa {{ $captcha_question }}</span>
                                <input type="number" name="captcha" class="form-control" placeholder="Jawaban" required>
                            </div>
                            @error('captcha')
                            <div style="color:red;">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-m btn-primary">Kirim Pesan</button>
                        </div>

                        @if(session('success'))
                        <div style="color:green;">{{ session('success') }}</div>
                        @endif

                        @if(session('error'))
                        <div style="color:red;">{{ session('error') }}</div>
                        @endif
                    </div>
                </form>

            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->
<!-- Blog Comments Section -->
<section id="blog-comments" class="blog-comments section">

    <div class="container">

        <h4 class="comments-count">{{ $data['totalKomentar'] }} Komentar</h4>
        @foreach ($bukutamu as $abukutamu)
        <div id="comment-{{ $abukutamu['id'] }}" class="comment">
            <div class="d-flex">
                <div>
                    <h5><b>{{ $abukutamu['name'] }}</b></h5>
                    <time datetime="{{ Carbon::parse($abukutamu['submitted_at'])->translatedFormat('d F Y') }}">
                        {{ Carbon::parse($abukutamu['submitted_at'])->translatedFormat('d F Y H:i:s') }}
                    </time>
                    <p>
                        {{ $abukutamu['message'] }}
                    </p>
                </div>
            </div>

            @if(!empty($abukutamu['admin_reply']))
            <div id="comment-reply-{{ $abukutamu['id'] }}" class="comment comment-reply">
                <div class="d-flex">
                    <div>
                        <h5><b>{{ $data['profil']['name'] }}</b></h5>
                        @if(!empty($abukutamu['replied_at']))
                        <time datetime="{{ Carbon::parse($abukutamu['replied_at'])->translatedFormat('d F Y') }}">
                            {{ Carbon::parse($abukutamu['replied_at'])->translatedFormat('d F Y H:i:s') }}
                        </time>
                        @endif
                        <p>
                            {{ $abukutamu['admin_reply'] }}
                        </p>
                    </div>
                </div>
            </div><!-- End comment reply #1-->
            @endif
        </div><!-- End comment #2-->
        @endforeach
    </div>

</section><!-- /Blog Comments Section -->
<!-- Blog Pagination Section -->
<section id="blog-pagination" class="blog-pagination section">
    <div class="container">
        <div class="d-flex justify-content-center">
            <ul class="pagination">
                @if($currentPage > 1)

                {{-- <li>
                                        <a href="{{ $baseUrl }}?page={{ $currentPage - 1 }}" class="prev"><<< /a>
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
                        echo '<li class="' . ($i==$currentPage ? 'active' : '' ) . '"><a href="' . $baseUrl . '?page=' . $i . '">' . $i . '</a></li>' ;
                        }

                        if ($end < $lastPage) {
                        if ($end < $lastPage - 1) {
                        echo '<li class="disabled"><span>...</span></li>' ;
                        }
                        echo '<li><a href="' . $baseUrl . '?page=' . $lastPage . '">' . $lastPage . '</a></li>' ;
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
@endsection
@section('description', $data['profil']['seo_desc'])
@section('keyword', $data['profil']['seo_desc'])
@section('title', 'Sambutan Pimpinan')
@section('name', $data['profil']['name'])
@section('image', env('URL_BACKEND')."storage/".$data['profil']['logo'] )