<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{

    public function beranda(Request $request)
    {
        // 1. SETUP VARIABEL UTAMA
        $client = new Client();
        $url = env('ENDPOINT_BACKEND') . "/posts";
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();
        $ipAdress = $request->ip();

        // Cek Token
        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        // Variabel penampung data
        $data = [];  // Untuk data Posts (Backend Anda)
        $stats = []; // Untuk data Kependudukan (Google Script)

        try {
            // ==========================================
            // REQUEST 1: DATA POSTS DARI BACKEND SENDIRI
            // ==========================================
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    'X-Ip-Header'    => $ipAdress,
                    'Accept' => 'application/json',
                ],
            ]);

            // Decode JSON response dari Backend
            $data = json_decode($response->getBody(), true);


            // ==========================================
            // REQUEST 2: DATA KEPENDUDUKAN (GOOGLE SCRIPT)
            // ==========================================
            // URL Google Script Anda
            $urlGoogle = 'https://script.googleusercontent.com/macros/echo?user_content_key=AehSKLjpsaGQzxUzzOzuftnTXTIB1B1leEmqHqlfbxIpKNdyckWP-0xjQPMGkZfSL0VwjHV-UJ7KLD3dz5I_OZko3JJDQcA9LdO6n6OAqQeUwLVaNMWdk9dRMGXw5yON6pnIFGt9dKkevLEohjgzVamEN3HBCm0DO_o9cNT5ij3ICWUZD2X-Wn9MS1WILtGf60ZeVsdX8V1y9AQ7pwYxBWh3tDG11ydo24ch4IwwPHw_rcwLFLIaIhLJiIoxGKF4EX3wpjfYRgq7HO2aIiq7YWyZz7k0XSWpzA&lib=M97uiOUFzJ5s3TyoLYsdwE1tKs-Q1xsYy';

            // Kita gunakan try-catch terpisah agar jika Google Error, website tetap jalan (hanya stats yg kosong)
            try {
                $responseGoogle = Http::timeout(5)->get($urlGoogle); // Timeout 5 detik agar tidak loading terus
                if ($responseGoogle->successful()) {
                    $stats = $responseGoogle->json();
                }
            } catch (\Exception $e) {
                // Opsional: Log error jika perlu, tapi biarkan $stats kosong agar tidak crash
                // \Log::error("Gagal ambil data kependudukan: " . $e->getMessage());
            }

            // ==========================================
            // KIRIM KE VIEW
            // ==========================================
            // Kita kirim $data (posts) dan $stats (kependudukan)
            return view('theme.flexstart.index', compact('data', 'stats'));
        } catch (\Exception $e) {
            // Ini Catch global jika Request Backend Utama Gagal
            return view('theme.flexstart.index', ['error' => $e->getMessage()]);
        }
    }

    public function blog(Request $request)
    {
        $client = new Client();
        $url = env('ENDPOINT_BACKEND') . "/blog?page=" . $request->get('page', 1); // Ambil halaman dari query string
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    'Accept' => 'application/json',
                ],
            ]);

            // Decode JSON response
            $data = json_decode($response->getBody(), true);
            $artikel = $data['artikel']['data'];
            $currentPage = $data['current_page'];
            $lastPage = $data['last_page'];
            $baseUrl = '';

            // Kirim data ke view
            return view('theme.flexstart.blog', compact('data', 'artikel', 'currentPage', 'lastPage', 'baseUrl'));
        } catch (\Exception $e) {
            // Menangani error
            return view('theme.flexstart.blog', ['error' => $e->getMessage()]);
        }
    }

    public function blogkategori(Request $request, string $slug)
    {
        $client = new Client();
        $url = env('ENDPOINT_BACKEND') . "/blogkategori/?page=" . $request->get('page', 1); // Ambil halaman dari query string
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    'X-Slug-Header' => $slug,
                    'Accept' => 'application/json',
                ],
            ]);

            // Decode JSON response
            $data = json_decode($response->getBody(), true);
            $artikel = $data['artikel']['data'];
            $currentPage = $data['current_page'];
            $lastPage = $data['last_page'];
            $baseUrl = '';

            // Kirim data ke view
            return view('theme.flexstart.blog_kategori', compact('data', 'artikel', 'currentPage', 'lastPage', 'baseUrl'));
        } catch (\Exception $e) {
            // Menangani error
            return view('theme.flexstart.blog_kategori', ['error' => $e->getMessage()]);
        }
    }

    public function singlepage(string $slug)
    {
        $client = new Client(); // Membuat instance Guzzle

        $url = env('ENDPOINT_BACKEND') . "/pages";
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        // dd(env('ENDPOINT_BACKEND'));

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    'X-Slug-Header' => $slug,
                    // 'X-Custom-Header' => '127.0.1.1:8001',
                    'Accept' => 'application/json',
                ],
            ]);

            // Decode JSON response
            $data = json_decode($response->getBody(), true);
            //dd($data);

            // Kirim data ke view
            return view('theme.flexstart.page', compact('data'));
        } catch (\Exception $e) {
            // Menangani error
            return view('theme.flexstart.page', ['error' => $e->getMessage()]);
        }
    }

    public function blogdetail(string $slug)
    {
        $client = new Client(); // Membuat instance Guzzle

        $url = env('ENDPOINT_BACKEND') . "/detailblog";
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        // dd(env('ENDPOINT_BACKEND'));

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    'X-Slug-Header' => $slug,
                    // 'X-Custom-Header' => '127.0.1.1:8001',
                    'Accept' => 'application/json',
                ],
            ]);

            // Decode JSON response
            $data = json_decode($response->getBody(), true);
            //dd($data);

            // Kirim data ke view
            return view('theme.flexstart.blog_detail', compact('data'));
        } catch (\Exception $e) {
            // Menangani error
            return view('theme.flexstart.blog_detail', ['error' => $e->getMessage()]);
        }
    }
    public function fetchData()
    {
        $client = new Client(); // Membuat instance Guzzle


        $url = env('ENDPOINT_BACKEND') . "/posts";
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        // dd(vars: $url);

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    // 'X-Custom-Header' => '127.0.1.1:8001',
                    'Accept' => 'application/json',
                ],
            ]);

            // Decode JSON response
            $data = json_decode($response->getBody(), true);
            //dd($data);

            // Kirim data ke view
            return view('api-data', compact('data'));
        } catch (\Exception $e) {
            // Menangani error
            return view('api-data', ['error' => $e->getMessage()]);
        }
    }

    public function galeri()
    {
        $client = new Client(); // Membuat instance Guzzle
        // $url = "http://127.0.0.1:8000/api/posts";
        // $url = "http://127.0.0.1:8000/api/posts";
        //$token = env('TOKEN_BACKEND'); // Ambil token dari .env
        // $token = '22|uKNooTQIZjikIVz2guHSZMnpX2S40mO858QcC2DO9b55b1ab';
        //dd($token);

        $url = env('ENDPOINT_BACKEND') . "/galeri";
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        // dd(env('ENDPOINT_BACKEND'));

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    // 'X-Custom-Header' => '127.0.1.1:8001',
                    'Accept' => 'application/json',
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            //dd($data);

            // Kirim data ke view
            return view('theme.flexstart.galeri', compact('data'));
        } catch (\Exception $e) {
            // Menangani error
            return view('theme.flexstart.galeri', ['error' => $e->getMessage()]);
        }
    }

    public function galeridetail(string $slug)
    {
        // Validasi slug
        if (empty($slug)) {
            return view('theme.flexstart.galeri_detail', ['error' => 'Slug is required']);
        }

        $client = new Client(); // Membuat instance Guzzle
        $url = env('ENDPOINT_BACKEND') . "/detailgaleri";
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    'X-Slug-Header' => $slug,
                    'Accept' => 'application/json',
                ],
            ]);

            // Memeriksa status kode respons
            if ($response->getStatusCode() !== 200) {
                return view('theme.flexstart.galeri_detail', ['error' => 'Failed to fetch data from API']);
            }

            // Decode JSON response
            $data = json_decode($response->getBody(), true);

            // Kirim data ke view
            return view('theme.flexstart.galeri_detail', compact('data'));
        } catch (\Exception $e) {
            // Menangani error dan mencatatnya
            \Log::error('Error fetching gallery detail: ' . $e->getMessage());
            return view('theme.flexstart.galeri_detail', ['error' => 'An error occurred while fetching data']);
        }
    }

    public function galerivideo(Request $request)
    {
        $client = new Client();
        $url = env('ENDPOINT_BACKEND') . "/galerivideo?page=" . $request->get('page', 1); // Ambil halaman dari query string
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    'Accept' => 'application/json',
                ],
            ]);

            // Decode JSON response
            $data = json_decode($response->getBody(), true);
            $galerivideo = $data['galerivideo']['data'];
            $currentPage = $data['current_page'];
            $lastPage = $data['last_page'];
            $baseUrl = '';

            // Kirim data ke view
            return view('theme.flexstart.galerivideo', compact('data', 'galerivideo', 'currentPage', 'lastPage', 'baseUrl'));
        } catch (\Exception $e) {
            // Menangani error
            return view('theme.flexstart.galerivideo', ['error' => $e->getMessage()]);
        }
    }

    public function layanan()
    {
        $client = new Client(); // Membuat instance Guzzle
        // $url = "http://127.0.0.1:8000/api/posts";
        // $url = "http://127.0.0.1:8000/api/posts";
        //$token = env('TOKEN_BACKEND'); // Ambil token dari .env
        // $token = '22|uKNooTQIZjikIVz2guHSZMnpX2S40mO858QcC2DO9b55b1ab';
        //dd($token);

        $url = env('ENDPOINT_BACKEND') . "/layanan";
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        // dd(env('ENDPOINT_BACKEND'));

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    // 'X-Custom-Header' => '127.0.1.1:8001',
                    'Accept' => 'application/json',
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            //dd($data);

            // Kirim data ke view
            return view('theme.flexstart.layanan', compact('data'));
        } catch (\Exception $e) {
            // Menangani error
            return view('theme.flexstart.layanan', ['error' => $e->getMessage()]);
        }
    }

    public function sarana()
    {
        $url = env('ENDPOINT_BACKEND') . "/sarana";
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();
        // dd($url_frontend);

        if (!$token) {
            return view('theme.flexstart.sarana', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengambil data dari API dengan Bearer Token
            $response = Http::withToken($token)
                ->withHeaders([
                    'X-Custom-Header' => $url_frontend,
                ])
                ->acceptJson()
                ->timeout(15) // Timeout 15 detik
                ->get($url);

            if ($response->failed()) {
                throw new \Exception('Gagal mengambil data. Status: ' . $response->status());
            }
            // Debug respons API sebelum parsing JSON
            $data = $response->json();

            // dd($data);

            return view('theme.flexstart.sarana', compact('data'));
        } catch (\Exception $e) {
            return view('theme.flexstart.sarana', ['error' => $e->getMessage()]);
        }
    }

    // public function sarana()
    // {
    //     $client = new Client(); // Membuat instance Guzzle
    //     // $url = "http://127.0.0.1:8000/api/posts";
    //     // $url = "http://127.0.0.1:8000/api/posts";
    //     //$token = env('TOKEN_BACKEND'); // Ambil token dari .env
    //     // $token = '22|uKNooTQIZjikIVz2guHSZMnpX2S40mO858QcC2DO9b55b1ab';
    //     //dd($token);

    //     $url = env('ENDPOINT_BACKEND')."/sarana"; 
    //     $token = env('KODE_BACKEND'); 
    //     $url_frontend = request()->getHost();

    //     // dd(env('ENDPOINT_BACKEND'));

    //     if (!$token) {
    //         return view('api-data', ['error' => 'Token not set in .env']);
    //     }

    //     try {
    //         // Mengirim permintaan GET ke API dengan Bearer Token
    //         $response = $client->request('GET', $url, [
    //             'headers' => [
    //                 'Authorization' => 'Bearer ' . $token,
    //                 'X-Custom-Header' => $url_frontend,
    //                 // 'X-Custom-Header' => '127.0.1.1:8001',
    //                 'Accept' => 'application/json',
    //             ],
    //         ]);

    //         $data = json_decode($response->getBody(), true);
    //         //dd($data);

    //         // Kirim data ke view
    //         return view('theme.flexstart.sarana', compact('data'));

    //     } catch (\Exception $e) {
    //         // Menangani error
    //         return view('theme.flexstart.sarana', ['error' => $e->getMessage()]);
    //     }
    // }

    public function pengaduan()
    {
        $client = new Client(); // Membuat instance Guzzle
        // $url = "http://127.0.0.1:8000/api/posts";
        // $url = "http://127.0.0.1:8000/api/posts";
        //$token = env('TOKEN_BACKEND'); // Ambil token dari .env
        // $token = '22|uKNooTQIZjikIVz2guHSZMnpX2S40mO858QcC2DO9b55b1ab';
        //dd($token);

        $url = env('ENDPOINT_BACKEND') . "/pengaduan";
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        // dd(env('ENDPOINT_BACKEND'));

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    // 'X-Custom-Header' => '127.0.1.1:8001',
                    'Accept' => 'application/json',
                ],
            ]);


            $data = json_decode($response->getBody(), true);


            // Kirim data ke view
            return view('theme.flexstart.pengaduan', compact('data'));
        } catch (\Exception $e) {
            // Menangani error
            return view('theme.flexstart.pengaduan', ['error' => $e->getMessage()]);
        }
    }

    public function sejarah()
    {
        $client = new Client(); // Membuat instance Guzzle
        // $url = "http://127.0.0.1:8000/api/posts";
        // $url = "http://127.0.0.1:8000/api/posts";
        //$token = env('TOKEN_BACKEND'); // Ambil token dari .env
        // $token = '22|uKNooTQIZjikIVz2guHSZMnpX2S40mO858QcC2DO9b55b1ab';
        //dd($token);

        $url = env('ENDPOINT_BACKEND') . "/sejarah";
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        // dd(env('ENDPOINT_BACKEND'));

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    // 'X-Custom-Header' => '127.0.1.1:8001',
                    'Accept' => 'application/json',
                ],
            ]);


            $data = json_decode($response->getBody(), true);


            // Kirim data ke view
            return view('theme.flexstart.sejarah', compact('data'));
        } catch (\Exception $e) {
            // Menangani error
            return view('theme.flexstart.sejarah', ['error' => $e->getMessage()]);
        }
    }

    public function visimisi()
    {
        $client = new Client(); // Membuat instance Guzzle
        // $url = "http://127.0.0.1:8000/api/posts";
        // $url = "http://127.0.0.1:8000/api/posts";
        //$token = env('TOKEN_BACKEND'); // Ambil token dari .env
        // $token = '22|uKNooTQIZjikIVz2guHSZMnpX2S40mO858QcC2DO9b55b1ab';
        //dd($token);

        $url = env('ENDPOINT_BACKEND') . "/visimisi";
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        // dd(env('ENDPOINT_BACKEND'));

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    // 'X-Custom-Header' => '127.0.1.1:8001',
                    'Accept' => 'application/json',
                ],
            ]);


            $data = json_decode($response->getBody(), true);


            // Kirim data ke view
            return view('theme.flexstart.visimisi', compact('data'));
        } catch (\Exception $e) {
            // Menangani error
            return view('theme.flexstart.visimisi', ['error' => $e->getMessage()]);
        }
    }

    public function tupoksi()
    {
        $client = new Client(); // Membuat instance Guzzle
        // $url = "http://127.0.0.1:8000/api/posts";
        // $url = "http://127.0.0.1:8000/api/posts";
        //$token = env('TOKEN_BACKEND'); // Ambil token dari .env
        // $token = '22|uKNooTQIZjikIVz2guHSZMnpX2S40mO858QcC2DO9b55b1ab';
        //dd($token);

        $url = env('ENDPOINT_BACKEND') . "/tupoksi";
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        // dd(env('ENDPOINT_BACKEND'));

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    // 'X-Custom-Header' => '127.0.1.1:8001',
                    'Accept' => 'application/json',
                ],
            ]);


            $data = json_decode($response->getBody(), true);


            // Kirim data ke view
            return view('theme.flexstart.tupoksi', compact('data'));
        } catch (\Exception $e) {
            // Menangani error
            return view('theme.flexstart.tupoksi', ['error' => $e->getMessage()]);
        }
    }

    public function struktur()
    {
        $client = new Client(); // Membuat instance Guzzle
        // $url = "http://127.0.0.1:8000/api/posts";
        // $url = "http://127.0.0.1:8000/api/posts";
        //$token = env('TOKEN_BACKEND'); // Ambil token dari .env
        // $token = '22|uKNooTQIZjikIVz2guHSZMnpX2S40mO858QcC2DO9b55b1ab';
        //dd($token);

        $url = env('ENDPOINT_BACKEND') . "/struktur";
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        // dd(env('ENDPOINT_BACKEND'));

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    // 'X-Custom-Header' => '127.0.1.1:8001',
                    'Accept' => 'application/json',
                ],
            ]);


            $data = json_decode($response->getBody(), true);


            // Kirim data ke view
            return view('theme.flexstart.struktur', compact('data'));
        } catch (\Exception $e) {
            // Menangani error
            return view('theme.flexstart.struktur', ['error' => $e->getMessage()]);
        }
    }

    public function sambutan()
    {
        $client = new Client(); // Membuat instance Guzzle
        // $url = "http://127.0.0.1:8000/api/posts";
        // $url = "http://127.0.0.1:8000/api/posts";
        //$token = env('TOKEN_BACKEND'); // Ambil token dari .env
        // $token = '22|uKNooTQIZjikIVz2guHSZMnpX2S40mO858QcC2DO9b55b1ab';
        //dd($token);

        $url = env('ENDPOINT_BACKEND') . "/sambutan";
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        // dd(env('ENDPOINT_BACKEND'));

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    // 'X-Custom-Header' => '127.0.1.1:8001',
                    'Accept' => 'application/json',
                ],
            ]);


            $data = json_decode($response->getBody(), true);


            // Kirim data ke view
            return view('theme.flexstart.sambutan', compact('data'));
        } catch (\Exception $e) {
            // Menangani error
            return view('theme.flexstart.sambutan', ['error' => $e->getMessage()]);
        }
    }

    public function skm()
    {
        $client = new Client(); // Membuat instance Guzzle
        // $url = "http://127.0.0.1:8000/api/posts";
        // $url = "http://127.0.0.1:8000/api/posts";
        //$token = env('TOKEN_BACKEND'); // Ambil token dari .env
        // $token = '22|uKNooTQIZjikIVz2guHSZMnpX2S40mO858QcC2DO9b55b1ab';
        //dd($token);

        $url = env('ENDPOINT_BACKEND') . "/skm";
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        // dd(env('ENDPOINT_BACKEND'));

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    // 'X-Custom-Header' => '127.0.1.1:8001',
                    'Accept' => 'application/json',
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            //dd($data);

            // Kirim data ke view
            return view('theme.flexstart.skm', compact('data'));
        } catch (\Exception $e) {
            // Menangani error
            return view('theme.flexstart.skm', ['error' => $e->getMessage()]);
        }
    }

    public function produkhukum(Request $request)
    {
        $client = new Client();
        $search = $request->input('search');
        $url = env('ENDPOINT_BACKEND') . "/produkhukum?page=" . $request->get('page', 1) . "&search=" . urlencode($search);
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    'Accept' => 'application/json',
                ],
            ]);

            // Decode JSON response
            $data = json_decode($response->getBody(), true);
            $fileupload = $data['fileupload']['data'];
            $currentPage = $data['current_page'];
            $lastPage = $data['last_page'];
            $baseUrl = $request->url(); // Set base URL for pagination

            // Kirim data ke view
            return view('theme.flexstart.produkhukum', compact('data', 'fileupload', 'currentPage', 'lastPage', 'baseUrl'));
        } catch (\Exception $e) {
            // Menangani error
            return view('theme.flexstart.produkhukum', ['error' => $e->getMessage()]);
        }
    }

    public function dokumenupload(Request $request)
    {
        $client = new Client();
        $search = $request->input('search');
        $url = env('ENDPOINT_BACKEND') . "/dokumenupload?page=" . $request->get('page', 1) . "&search=" . urlencode($search);
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    'Accept' => 'application/json',
                ],
            ]);

            // Decode JSON response
            $data = json_decode($response->getBody(), true);
            $fileupload = $data['fileupload']['data'];
            $currentPage = $data['current_page'];
            $lastPage = $data['last_page'];
            $baseUrl = $request->url(); // Set base URL for pagination

            // Kirim data ke view
            return view('theme.flexstart.dokumenupload', compact('data', 'fileupload', 'currentPage', 'lastPage', 'baseUrl'));
        } catch (\Exception $e) {
            // Menangani error
            return view('theme.flexstart.dokumenupload', ['error' => $e->getMessage()]);
        }
    }

    public function bukutamu(Request $request)
    {
        $client = new Client(); // Membuat instance Guzzle
        // $url = "http://127.0.0.1:8000/api/posts";
        // $url = "http://127.0.0.1:8000/api/posts";
        //$token = env('TOKEN_BACKEND'); // Ambil token dari .env
        // $token = '22|uKNooTQIZjikIVz2guHSZMnpX2S40mO858QcC2DO9b55b1ab';
        //dd($token);

        $url = env('ENDPOINT_BACKEND') . "/bukutamu?page=" . $request->get('page', 1);
        $token = env('KODE_BACKEND');
        $url_frontend = request()->getHost();

        // dd(env('ENDPOINT_BACKEND'));

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url_frontend,
                    // 'X-Custom-Header' => '127.0.1.1:8001',
                    'Accept' => 'application/json',
                ],
            ]);

            // Decode JSON response
            $data = json_decode($response->getBody(), true);
            $bukutamu = $data['bukutamu']['data'];
            $currentPage = $data['current_page'];
            $lastPage = $data['last_page'];
            $baseUrl = '';


            // $data = json_decode($response->getBody(), true);


            // Generate Math Captcha
            $num1 = rand(1, 9);
            $num2 = rand(1, 9);
            $request->session()->put('captcha_answer', $num1 + $num2);
            $captcha_question = "$num1 + $num2 = ?";

            // Kirim data ke view
            return view('theme.flexstart.bukutamu', compact('data', 'bukutamu', 'currentPage', 'lastPage', 'baseUrl', 'captcha_question'));
        } catch (\Exception $e) {
            // Menangani error
            return view('theme.flexstart.bukutamu', ['error' => $e->getMessage()]);
        }
    }

    //buku tamu kirim
    public function storeBukutamu(Request $request)
    { {
            $validated = $request->validate([
                'idprofil' => 'required|numeric',
                'name' => 'required|max:100',
                'email' => 'required|email|max:100',
                'message' => 'required|min:10|max:1000',
                'captcha' => 'required|numeric'
            ]);

            if ($request->captcha != $request->session()->get('captcha_answer')) {
                return back()->with('error', 'Jawaban verifikasi (Captcha) salah.')->withInput();
            }

            // Hapus captcha dari session setelah divalidasi
            $request->session()->forget('captcha_answer');

            try {
                $client = new Client();
                $response = $client->post(env('ENDPOINT_BACKEND') . '/sendbukutamu', [
                    'headers' => [
                        'Authorization' => 'Bearer ' . env('API_TOKEN'),
                        'Accept' => 'application/json',
                    ],
                    'form_params' => $validated,
                ]);

                return back()->with('success', 'Pesan berhasil dikirim!');
            } catch (\GuzzleHttp\Exception\RequestException $e) {
                $status = $e->getResponse()->getStatusCode();
                if ($status == 429) {
                    return back()->with('error', 'Terlalu banyak permintaan. Coba lagi nanti.');
                }
                $msg = optional(json_decode($e->getResponse()?->getBody(), true))['message'] ?? 'Gagal mengirim pesan.';
                return back()->with('error', $msg);
            } catch (\Exception $e) {
                return back()->with('error', 'Terjadi kesalahan sistem.');
            }
        }
    }
}
