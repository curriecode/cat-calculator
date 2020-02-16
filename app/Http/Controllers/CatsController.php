<?php

namespace App\Http\Controllers;

use App\Cat;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

// use Faker\Generator;

class CatsController extends Controller
{
    public function create()
    {
            $client = new \GuzzleHttp\Client();
            $request = $client->get('https://api.thecatapi.com/v1/images/search');
            $response = $request->getBody();
            Log::debug($response);
            dd($response);

        // return response($cat->jsonSerialize(), Response::HTTP_CREATED);
    }
}
