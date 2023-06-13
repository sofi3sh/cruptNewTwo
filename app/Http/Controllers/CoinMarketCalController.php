<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;



class CoinMarketCalController extends Controller
{
    public function index()
    {
        $url = 'https://coinmarketcal.com/';
        $response = Http::get($url);
        $html = $response->body();

        $crawler = new Crawler($html);

        $newsElements = $crawler->filter('.card__body');

        $newsList = [];
        $title = '';
        $description = '';
        $date = '';
        $newsElements->each(function (Crawler $node) use (&$newsList) {
            $title = $node->filter('.card__title')->text();
            $date = $node->filter('.card__date')->text();
            $description = $node->filter('.box .card__description')->text();

            if (strpos($title, 'Listing') !== false && strpos($description, '/USDT') !== false) {
                $newsList[] = [
                    'title' => $title,
                    'date' => $date,
                    'description' => $description,
                ];
            }
        });
        return view('listing', ['title'=>$title, 'listings'=>$newsList]);
    }

}
