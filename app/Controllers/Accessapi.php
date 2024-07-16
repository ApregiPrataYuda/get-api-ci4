<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\Client;
class Accessapi extends BaseController
{
    public function index()
    {
        // Memuat library HTTP Client
        $client = \Config\Services::curlrequest();

        // URL API eksternal
        $url = 'https://api.artic.edu/api/v1/artworks/search?q=cats';

        // Mengirim permintaan GET dengan header tambahan
        try {
            $response = $client->request('GET', $url, [
                'headers' => [
                    'User-Agent' => 'CodeIgniterApp/1.0'
                ]
            ]);
            // Memeriksa status code
            if ($response->getStatusCode() == 200) {
                // Mengambil data JSON dari respons
               // Mengambil data JSON dari respons
               $data['results'] = json_decode($response->getBody(), true);
                
               // Mengirim data ke view
            //    return view('artworks_view', $data);
                // Menampilkan data (bisa diganti dengan view atau logika lain)
                // return $this->response->setJSON($data);
                return view('Accessapi/Data', $data);
            } else {
                // Menangani error
                return $this->response->setStatusCode($response->getStatusCode())->setBody($response->getBody());
            }
        } catch (\Exception $e) {
            // Menangani kesalahan HTTP atau CURL
            return $this->response->setStatusCode(500)->setBody('Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
