@extends('theme.flexstart.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/beranda') }}">Beranda</a></li>
                    <li class="current">Produk Hukum</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Halaman</h2>
            <p>Produk Hukum</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" style="max-width: 100%; max-height: 100%; overflow: auto; box-sizing: border-box;">
            <!-- Pencarian -->
            <form method="GET" action="{{ route('produkhukum') }}">
                <div class="mb-3 d-flex">
                    <input type="text" name="search" class="form-control" placeholder="Cari nama dokumen..." value="{{ request('search') }}">
                    <button type="submit" class="btn btn-primary ms-2">Cari</button> <!-- Search Button -->
                </div>
            </form>

            <!-- Tabel Data -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                          	<th>Upload</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($fileupload as $index => $file)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $file['title'] }}</td>
                                <td>{{ $file['kategori'] }}</td>
                              	<td>{{ \Carbon\Carbon::parse($file['updated_at'])->format('d-m-Y') }} </td>
                                <td>
                                     @if (strpos($file['url'], 'http') === 0) <!-- Check if URL starts with 'http' -->
                                        <a href="{{ $file['url'] }}" class="btn btn-primary btn-sm" download>
                                            Download
                                        </a>
                                    @else
                                        <a href="{{ config('app.backend_url') . 'storage/' . $file['url'] }}" class="btn btn-primary btn-sm" download>
                                            Download
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Tidak ada data ditemukan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Blog Pagination Section -->
            <section id="blog-pagination" class="blog-pagination section">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <ul class="pagination">
                            @if($currentPage > 1)
                                <li><a href="{{ $baseUrl }}?page={{ $currentPage - 1 }}&search={{ request('search') }}">Previous</a></li>
                            @endif

                            @php
    $range = 2; 
    $start = max(1, $currentPage - $range);
    $end = min($lastPage, $currentPage + $range);

    if ($start > 1) {
        // ✅ AMAN: Menggunakan htmlspecialchars()
        echo '<li><a href="' . $baseUrl . '?page=1&search=' . htmlspecialchars(request('search')) . '">1</a></li>';
        if ($start > 2) {
            echo '<li class="disabled"><span>...</span></li>';
        }
    }

    for ($i = $start; $i <= $end; $i++) {
        // ✅ AMAN: Menggunakan htmlspecialchars()
        echo '<li class="' . ($i == $currentPage ? 'active' : '') . '"><a href="' . $baseUrl . '?page=' . $i . '&search=' . htmlspecialchars(request('search')) . '">' . $i . '</a></li>';
    }

    if ($end < $lastPage) {
        if ($end < $lastPage - 1) {
            echo '<li class="disabled"><span>...</span></li>';
        }
        // ✅ AMAN: Menggunakan htmlspecialchars()
        echo '<li><a href="' . $baseUrl . '?page=' . $lastPage . '&search=' . htmlspecialchars(request('search')) . '">' . $lastPage . '</a></li>';
    }
                            @endphp

                            @if($currentPage < $lastPage)
                                <li><a href="{{ $baseUrl }}?page={{ $currentPage + 1 }}&search={{ request('search') }}">Next</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </section>
            <!-- /Blog Pagination Section -->
        </div>
    </section><!-- /Starter Section Section -->
    
@endsection

@section('description', $data['profil']['seo_desc'])
@section('keyword', $data['profil']['seo_desc'])
@section('title', 'Produk Hukum')
@section('name', $data['profil']['name'])
@section('image', env('URL_BACKEND') . "storage/" . $data['profil']['logo'])
