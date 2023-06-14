<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BasicController extends Controller
{
    protected $client;
    protected $baseUri;
    protected $apiKey;
    protected $apiSecret;

    public function __construct()
    {
        $this->client = new Client();
        $this->baseUri = 'https://api.mexc.com';
        $this->apiKey = 'mx0vglFextYa57k1Mo';
        $this->apiSecret = '421809a1c9db4e419ae79fea382106b6';
    }

    public function getCurrentPrice($symbol)
    {
        $response = $this->client->get($this->baseUri . "/api/v3/ticker/price?symbol={$symbol}");


        if ($response->getStatusCode() === 200) {
            $data = json_decode($response->getBody()->getContents(), true);
            $price = $data['price'];

            return $price;
        }

        return null;
    }

    public function getServerTime() {
        $response = $this->client->get($this->baseUri . "/api/v3/time");


        if ($response->getStatusCode() === 200) {
            $data = json_decode($response->getBody()->getContents(), true);

            $serverTime = $data['serverTime'];

            return $serverTime;
        }

        return null;

    }

    public function getBalance() {
        $now = Carbon::now()->unix();
        $api_nonce = strval($now*1000);

//        $api_sign = hash_hmac('sha256', "/api/v3" . pack('Q', $api_nonce), $this->apiSecret);

        $prehash = $api_nonce . 'GET' . '/api/v3/account';

        $api_sign = hash_hmac('sha256', $prehash, $this->apiSecret);



        $response = Http::withHeaders([
            'Content-Type'    => 'application/json',
            'X-MXC-APIKEY'    => $this->apiKey,
            'X-MXC-SIGNATURE' => $api_sign,
            'X-MXC-NONCE'     => $api_nonce

//            'Accept' => 'application/json',
//            'Content-Type' => 'application/json',
//            'ACCESS-KEY' => $this->apiKey,
//            'ACCESS-SIGN' => $api_sign,
//            'ACCESS-TIMESTAMP' => $now

        ])->get($this->baseUri . '/api/v3/account', [
            'timestamp' => $api_nonce,
        ]);

//        $response = $this->client->get($this->baseUri . "/api/v3/time");

        if ($response->getStatusCode() === 200) {
            $data = json_decode($response->getBody()->getContents(), true);

            $serverTime = $data['serverTime'];

            return $serverTime;
        }
        $data = json_decode($response->getBody()->getContents(), true);

        return $data;

    }
}
