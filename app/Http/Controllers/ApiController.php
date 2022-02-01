<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function proxy($path, Request $request){
          $method = strtolower($request->method());
         $guzzle = new Client();
         $response = $guzzle->$method("https://tahvel.edu.ee/hois_back/$path", [
             'query' => $request->query()
         ]);
         return $response->getBody()->getContents();
    }
}
