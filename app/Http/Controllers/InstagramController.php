<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\InstagramDownloader;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class InstagramController extends Controller
{
    protected $instagramDownloader;

    public function __construct(InstagramDownloader $instagramDownloader)
    {
        $this->instagramDownloader = $instagramDownloader;
    }

    public function downloadReels(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'url' => 'required'
        // ]);

        // if ($validator->fails()) {
        //     return response()->json(['error' => $validator->errors()], 422);
        // }

        $url = $request->input('reels_url');
        $encode = urlencode($url);
        $content = $this->instagramDownloader->downloadReels($url);
        if (isset($content["data"])) {
            return response()->json(['links' => $content['data']]);
        } else {
            return response()->json(['error' => 'Video URL not found'], 500);
        }
    }
}
