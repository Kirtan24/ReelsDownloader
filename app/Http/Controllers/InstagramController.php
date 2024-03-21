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

        $result = $this->instagramDownloader->downloadReels($reelsUrl);

        return response()->json($result);
    }
}
