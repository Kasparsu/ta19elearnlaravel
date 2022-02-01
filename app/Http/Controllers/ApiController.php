<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
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

    public function polling(Request $request){
        $date = Carbon::createFromTimeString($request->query('date'));
        return Post::whereDate('created_at', '>=', $date)->whereTime('created_at', '>', $date)->get();
    }

    public function longpolling(Request $request){
        $date = Carbon::createFromTimeString($request->query('date'));
        do {
            $posts = Post::whereDate('created_at', '>=', $date)->whereTime('created_at', '>', $date)->get();
            if(!$posts->count()){
                sleep(1);
            }
        } while(!$posts->count());
        return $posts;
    }
}
