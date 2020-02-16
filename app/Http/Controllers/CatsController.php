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

        $cat = new Cat();
    //   $crud->name = $faker->lexify('????????');
    //   $crud->color = $faker->boolean ? 'red' : 'green';
    //   $crud->save();
        Log::debug("wjaat");
    // Log::channel('stderr')->info('Something happened!');

    //   return response($crud->jsonSerialize(), Response::HTTP_CREATED);
        return response($cat->jsonSerialize(), Response::HTTP_CREATED);
    }
}
