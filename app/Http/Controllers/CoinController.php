<?php

namespace App\Http\Controllers;

use App\Models\Exchange;
use App\Services\MexcApi;
use Illuminate\Http\Request;
use App\Models\Coin;

class CoinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coins = Coin::all();
        $coins = Coin::select(
            'coins.*',
            'listings.exchange_id',
            'listings.start_at',
        )->where('coins.id', '=', 'listings.coin_id')
         ->leftJoin('listings', 'listings.coin_id', '=', 'coins.id')
         ->get();
     //   dd($coins);


//        $url = 'https://www.mexc.com/open/api/v2/market/symbols';


        $mexcApi = new MexcApi();
        $symbol = 'BTCUSDT';
        $price = $mexcApi->getCurrentPrice($symbol);


        return view('test.coin', compact('coins', 'price', 'symbol'));
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
