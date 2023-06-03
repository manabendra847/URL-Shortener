<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;

class UrlShortenerController extends Controller
{
    public function index()
    {
        return view('shortener');
    }


    public function shorten(Request $request)
    {
        $longUrl = $request->input('url');

        // Check if the long URL already exists in the database
        $url = Url::where('url', $longUrl)->first();

        if ($url) {
            $shortUrl = url("/{$url->code}");
        } else {
            $shortCode = $this->generateShortCode();

            Url::create([
                'code' => $shortCode,
                'url' => $longUrl,
            ]);

            $shortUrl = url("/$shortCode");
        }

        return view('shortener', compact('shortUrl'));
    }


    public function redirect($code)
    {
        $url = Url::where('code', $code)->first();

        if ($url) {
            return redirect($url->url);
        } else {
            abort(404);
        }
    }

    private function generateShortCode()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';
        for ($i = 0; $i < 5; $i++) {
            $code .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $code;
    }
}
