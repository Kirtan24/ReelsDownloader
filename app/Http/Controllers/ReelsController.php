<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReelsController extends Controller
{
    public function index()
    {
        return view('main.url');
    }
    public function downloadReels(Request $request)
    {
        $url = $request->input('url');

        $client = new Client();

        $response = $client->request('GET', 'https://instagram-post-reels-stories-downloader.p.rapidapi.com/instagram/?url=' . urlencode($url), [
            'headers' => [
                'X-RapidAPI-Host' => 'instagram-post-reels-stories-downloader.p.rapidapi.com',
                'X-RapidAPI-Key' => '54f8b05ac2msh448f0c29037ad86p19c1bejsnf3433b780fd5',
            ],
        ]);

        return $response->getBody();
    }
}
