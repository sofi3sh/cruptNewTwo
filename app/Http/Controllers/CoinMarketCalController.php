<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
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

        $today = Carbon::now()->format('j F Y');

        $listings = $crawler->filter('.list-card .card__body')->each(function (Crawler $node) {
            $card__date = $node->filter('.card__date')->text();
            $card__title = $node->filter('.card__title')->text();
            $link__detail = $node->filter('.link-detail')->text();
            $card__description = $node->filter('.card__description')->text();

            return [
                'card__date' => $card__date,
                'card__title' => $card__title,
                'link__detail' => $link__detail,
                'card__description' => $card__description
            ];

        });
        return view('listing', ['listings'=>$listings]);
    }

}
