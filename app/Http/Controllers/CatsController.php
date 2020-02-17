<?php

namespace App\Http\Controllers;

use App\Cat;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class CatsController extends Controller
{
    public function create()
    {
            $client = new \GuzzleHttp\Client();
            $request = $client->get('https://api.thecatapi.com/v1/images/search');
            $response = $request->getBody();
            Log::debug($response);
            return response($response, Response::HTTP_CREATED);
    }
}
