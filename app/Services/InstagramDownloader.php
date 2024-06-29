<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Client;

class InstagramDownloader
{
    protected $client;

    public function downloadReels($reelsUrl)
    {

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://instagram-post-downloader.p.rapidapi.com/?url=' . $reelsUrl, [
            'headers' => [
                'x-rapidapi-host' => 'instagram-post-downloader.p.rapidapi.com',
                'x-rapidapi-key' => '54f8b05ac2msh448f0c29037ad86p19c1bejsnf3433b780fd5',
            ],
        ]);

        try {
            $body = $response->getBody()->getContents();
            $data = json_decode($body, true);
            return $data;
        } catch (Exception $e) {
            dd($e);
        }
    }
}
