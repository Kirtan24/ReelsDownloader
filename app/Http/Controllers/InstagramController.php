<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\InstagramDownloader;

class InstagramController extends Controller
{
    protected $instagramDownloader;

    public function __construct(InstagramDownloader $instagramDownloader)
    {
        $this->instagramDownloader = $instagramDownloader;
    }

    public function downloadReels(Request $request)
    {
        $reelsUrl = $request->input('reels_url');
        $videoContent = $this->instagramDownloader->downloadReels($reelsUrl);
        $videoThumb = $videoContent[0]["thumb"];
        $videoLink = $videoContent[0]["link"];
    
        return response(["thumb" => $videoThumb,"link" => $videoLink], 200);
    }

    public function proxyInstagramVideo(Request $request)
    {
       $videoUrl = $request->input('video_url');
       $client = new \GuzzleHttp\Client();
       $response = $client->get($videoUrl);
       $videoData = $response->getBody()->getContents();
    
        return response($videoData, 200, [
           'Content-Type' => 'video/mp4',
           'Content-Disposition' => 'inline',
        ]);
}

}
