<?php

namespace App\Services;

use GuzzleHttp\Client;

class InstagramDownloader
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://instagram-post-reels-stories-downloader.p.rapidapi.com',
            'headers' => [
                'X-RapidAPI-Host' => 'instagram-post-reels-stories-downloader.p.rapidapi.com',
                'X-RapidAPI-Key' => '54f8b05ac2msh448f0c29037ad86p19c1bejsnf3433b780fd5',
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    public function downloadReels($reelsUrl)
    {
        $response = $this->client->get('/reels', [
            'query' => [
                'url' => $reelsUrl,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
