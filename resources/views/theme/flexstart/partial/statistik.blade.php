<section id="stats" class="stats section">

    <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

        <div class="container section-title" data-aos="fade-up">
            <h2>Informasi Penduduk dan Ketersediaan Blanko E-KTP</h2>
            <p>{{ $data['profil']['singkatan'] ?? '' }}</p>
        </div>
        
        <div class="row gy-4">

            @if(empty($stats))
                <div class="col-12 text-center text-danger">
                    <p>Gagal memuat data statistik kependudukan.</p>
                </div>
            @else
                @foreach($stats as $item)
                    @php
                        // --- LOGIKA IKON & WARNA ---
                        $kategori = isset($item['Kategori']) ? strtolower($item['Kategori']) : '';
                        
                        if (str_contains($kategori, 'laki')) {
                            $icon = 'bi-gender-male';
                            $colorStyle = '#0d6efd'; 
                        } elseif (str_contains($kategori, 'perempuan')) {
                            $icon = 'bi-gender-female';
                            $colorStyle = '#bb0852'; 
                        } elseif (str_contains($kategori, 'blanko')) {
                            $icon = 'bi-person-vcard';
                            $colorStyle = '#ee6c20'; 
                        } else {
                            $icon = 'bi-people'; 
                            $colorStyle = '#15be56'; 
                        }

                        // --- LOGIKA FORMAT TANGGAL ---
                        $keterangan = $item['Keterangan'] ?? '-';
                        if (str_contains($keterangan, 'T') && preg_match('/\d{4}-\d{2}-\d{2}/', $keterangan)) {
                            try {
                                $date = \Carbon\Carbon::parse($keterangan)
                                    ->setTimezone('Asia/Jakarta')
                                    ->locale('id');
                                $keterangan = $date->isoFormat('D MMMM Y'); 
                            } catch (\Exception $e) {}
                        }
                    @endphp

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi {{ $icon }} flex-shrink-0" style="color: {{ $colorStyle }};"></i>
                            
                            <div>
                                <span 
                                    data-purecounter-start="0" 
                                    data-purecounter-end="{{ $item['Jumlah'] }}" 
                                    data-purecounter-duration="1" 
                                    data-purecounter-separator="true" 
                                    data-purecounter-separatorsymbol="."
                                    class="purecounter">
                                    {{ number_format($item['Jumlah'], 0, ',', '.') }}
                                </span>
                                
                                <p class="mb-0">{{ $item['Kategori'] }}</p>
                                
                                <small class="text-muted" style="font-size: 0.8rem;">
                                    {{ $keterangan }}
                                </small>
                            </div>
                        </div>
                    </div>@endforeach
            @endif

        </div>

    </div>

</section>