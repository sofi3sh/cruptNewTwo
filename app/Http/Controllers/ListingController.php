<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\Listing;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\DomCrawler\Crawler;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $listings_filtered = Cache::remember($this->getCacheKey(), 55, function () {
            $client = new Client();
            $response = $client->request('GET', 'https://coinmarketcal.com/');
            $html = (string)$response->getBody();

            // dump($response->getBody());

            $crawler = new Crawler($html);

            // dd($crawler);

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

            $listings_filtered = array_filter($listings, function ($listing) use ($today) {
                return (
                        $listing['card__date'] == $today) &&
                    (strpos($listing['card__title'], 'Listing') !== false
                    );
            });

            return $listings_filtered;
        });

        foreach ($listings_filtered as $listing) {

            preg_match('/with ([A-Z]+)\/([A-Z]+)/', $listing['card__description'], $matches);

            $firstValue = $matches[1]; // HUDI
            $secondValue = $matches[2]; // USDT

            $coinId =  Coin::create([
                'name_coin_one' => $firstValue,
                'name_coin_two' => $secondValue,
            ]);

            if($coinId->id){
                Listing::create([
                    'exchange_id' => 1,
                    'coin_id' => $coinId->id,
                    'card__date' => $listing['card__date'],
                    'card__title' => $listing['card__title'],
                    'link__detail' => $listing['link__detail'],
                    'card__description' => $listing['card__description'],
                ]);
            }

        }
        return view('pages.listings.index', ['listings' => $listings_filtered]);
    }
    protected function getCacheKey()
    {
        return 'coinmarketcal.listings.' . Carbon::now()->format('Y-m-d H:i:00');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
