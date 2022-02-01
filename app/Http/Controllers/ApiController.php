<?php

namespace App\Http\Controllers;

use http\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function proxy(){
        $guzzle = new Client();
        $response = $guzzle->get();
        return $response->getBody()->getContents();
    }
}
