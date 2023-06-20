<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use OpenAI;

class GenerateImageAI extends Controller
{

    public function index(Request $request)
    {
        if ($request->prompt != null) {
            $apiKey = getenv('OPEN_AI_API_KEY');
            $client = OpenAI::client($apiKey);
            $response = $client->images()->create([
                'prompt' => $request->prompt,
                'n' => 9,
                'size' => '1024x1024',
                'response_format' => 'url',
            ]);
            $myImages = [];
            $response->created;
            foreach ($response->data as $data) {
                $myImages[] = [
                    'url' => $data->url,
                ];
            }
            $hide = '1';
            $prompt = $request->prompt;
            return view('index', compact(['myImages', 'hide', 'prompt']));
        } else {
            # code...
            //dd($myImages);
            $hide = '0';
            return view('index', compact('hide'));
        }
    }
}
