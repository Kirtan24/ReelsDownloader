<?php

namespace App\Services;

use GuzzleHttp\Client;

class InstagramDownloader
{
    protected $client;

    public function downloadReels($reelsUrl)
    {
//         $client = new \GuzzleHttp\Client();

// $response = $client->request('GET', 'https://instagram-post-and-reels-downloader.p.rapidapi.com/?url=https%3A%2F%2Fwww.instagram.com%2Freel%2FC0haD5YtZ4h%2F%3Futm_source%3Dig_web_copy_link%26igshid%3DMzRlODBiNWFlZA%3D%3D', [
// 	'headers' => [
// 		'X-RapidAPI-Host' => 'instagram-post-and-reels-downloader.p.rapidapi.com',
// 		'X-RapidAPI-Key' => '54f8b05ac2msh448f0c29037ad86p19c1bejsnf3433b780fd5',
// 	],
// ]);

// dd($response);
        $client = new \GuzzleHttp\Client();
        
        $response = $client->request('GET', 'https://instagram-post-and-reels-downloader.p.rapidapi.com/?url='.$reelsUrl, [
            'headers' => [
                'X-RapidAPI-Host' => 'instagram-post-and-reels-downloader.p.rapidapi.com',
                'X-RapidAPI-Key' => '54f8b05ac2msh448f0c29037ad86p19c1bejsnf3433b780fd5',
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
