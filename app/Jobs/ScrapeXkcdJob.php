<?php

namespace App\Jobs;

use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\DomCrawler\Crawler;

class ScrapeXkcdJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $i;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($i)
    {
        $this->i = $i;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $guzzle = new Client();
        for($i = 2569; $i>2559; $i--) {
            $body = $this->getOrCache("https://xkcd.com/$i/", $guzzle);
            //var_dump($body);
            $crawler = new Crawler($body);
            $imgEl = $crawler->filter('#comic>img');
//            var_dump([
//                'img' => $imgEl->attr('src'),
//                'title' => $imgEl->attr('alt'),
//                'text' => $imgEl->attr('title')
//            ]);
            $img = file_get_contents('https:' . $imgEl->attr('src'));
            $name = substr($imgEl->attr('src'), )


        }
    }

    public function getOrCache($url, Client $guzzle){
        if(Cache::has($url)){
            return Cache::get($url);
        }
        $response = $guzzle->get($url);
        //echo "made a request";
        $body = $response->getBody()->getContents();
        Cache::put($url, $body);
        return $body;
    }
}
