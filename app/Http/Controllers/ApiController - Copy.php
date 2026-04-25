<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function fetchData()
    {
        // $client = new Client(); // Membuat instance Guzzle
        // $url = "http://127.0.0.1:8000/api/posts"; // Ganti dengan URL API Anda

        // try {
        //     // Mengirim permintaan GET ke API dengan Bearer Token
        //     $response = $client->request('GET', $url, [
        //         'headers' => [
        //             'Authorization' => 'Bearer ' . env('TOKEN_BACKEND'),
        //             'Accept' => 'application/json',
        //         ],
        //     ]);

        //     // Decode JSON response
        //     $data = json_decode($response->getBody(), true);
        //     dd(env('TOKEN_BACKEND'));

        //     // Kirim data ke view
        //     return view('api-data', compact('data'));

        // } catch (\Exception $e) {
        //     // Menangani error
        //     return view('api-data')->withErrors(['error' => $e->getMessage()]);
        // }
        $client = new Client(); // Membuat instance Guzzle
        $url = "http://127.0.0.1:8000/api/posts"; // Ganti dengan URL API Anda
        //$token = env('TOKEN_BACKEND'); // Ambil token dari .env
        $token = '22|uKNooTQIZjikIVz2guHSZMnpX2S40mO858QcC2DO9b55b1ab';
        //dd($token);
        
        $endpoint_backend = env('ENDPOINT_BACKEND'); 
        $kode_backend = env('KODE_BACKEND'); 
        $url_frontend = env('URL_FRONTEND');

        if (!$token) {
            return view('api-data', ['error' => 'Token not set in .env']);
        }

        try {
            // Mengirim permintaan GET ke API dengan Bearer Token
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'X-Custom-Header' => $url,
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
}
