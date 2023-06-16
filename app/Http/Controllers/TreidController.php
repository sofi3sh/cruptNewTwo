<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        https://api.mexc.com/api/v3/order?symbol=MXUSDT&side=BUY&type=LIMIT&quantity=50&price=0.1&timestamp={{timestamp}}&signature={{signature}}

        $secretKey = '421809a1c9db4e419ae79fea382106b6';
        $url = 'https://api.mexc.com/api/v3/order';

        $data2 = time() * 1000;
        $params = [
            'timestamp' => $data2,
        ];

        $totalParams = http_build_query($params);
        $signature = hash_hmac('sha256', $totalParams, $secretKey);
        $symbol = 'MXUSDT'; // тут зміні дані
        $side = 'BUY'; // тут зміні дані
        $type = 'LIMIT'; // тут зміні дані
        $quantity = 1; // тут зміні дані
        $price = 0.1; // тут зміні дані
        $curl = curl_init();
        curl_setopt_array($curl, array(

//            CURLOPT_URL => $url,
            CURLOPT_URL => $url .
                '?symbol=' . $symbol .
                '&side=' . $side .
                '&type=' . $type .
                '&quantity=' . $quantity .
                '&price=' .  $price .
                '&timestamp=' . $data2 .
                '&signature=' . $signature,

            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'x-mexc-apikey: mx0vglFextYa57k1Mo',
                'x-mexc-signature: ' . $signature,
                'x-mexc-timestamp: ' . $data2,
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        //відповідь приходить як рядок - декодуємо рядок JSON
        $response = json_decode($response);
        return view('test.treid', ['ordertest'=>$response]);
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
