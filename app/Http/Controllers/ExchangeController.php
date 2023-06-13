<?php

namespace App\Http\Controllers;

use App\Models\Exchange;
use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

//
//// Load API key and secret
//$api_key = "mx0vglnE5OWICqNGTW";
//$api_secret = "ba53ce551e1c47aa9172ad9c805dfc15";
//// set the endpoint URL
//$url = 'https://www.mexc.com/open/api/v2/market/symbols';
//// Connect to API
//$api_nonce = strval(time() * 1000);
//$api_sign = hash_hmac('sha256', "/open/api/v2" . pack('Q', $api_nonce), $api_secret);
//$headers = ['Content-Type: application/json',
//'X-MXC-APIKEY: ' . $api_key,
//'X-MXC-SIGNATURE: ' . $api_sign,
//'X-MXC-NONCE: ' . $api_nonce,];
//$curl_opts = [CURLOPT_URL => $url,
//CURLOPT_RETURNTRANSFER => true,
//CURLOPT_HTTPHEADER => $headers,];
//$ch = curl_init();
//curl_setopt_array($ch, $curl_opts);
//$response = curl_exec($ch);
//if (curl_errno($ch))
//{
//$message = date(DATE_RSS) . ' : ERROR connecting to MEXC API to check trading pairs to USDT: ' . curl_error($ch) . "\n";
//write_log($message);
//exit;
//}
//
//else {
//    $message = date(DATE_RSS) . " : Connection to MEXC API to check trading pairs to USDT successful! \n";
//    write_log($message);
//}
//$response_array = json_decode($response, true);
//if (!isset($response_array['data'])) {
//    $message = 'Error: Unexpected response from ' . $url . '. Response: ' . $response . "\n";
//    write_log(date(DATE_RSS) . " : " . $message);
//}
////get the symbols from the response
//$pairs_all = $response_array['data'];
//$pairs_usdt = array();
//foreach ($pairs_all as $pair) {
//    if (strpos($pair['symbol'], "USDT") !== false) {
//        $pairs_usdt[] = $pair['symbol'];
//    }
//}
//$oldpairs = "oldpairs.json";
//if (!file_exists($oldpairs)) {
//    file_put_contents($oldpairs, json_encode($pairs_usdt));
//}
//$oldpairs_content = file_get_contents($oldpairs);
//$oldpairs_decode = json_decode($oldpairs_content, true);
//$pairs_differents = array_diff($pairs_usdt, $oldpairs_decode);
//if (!empty($pairs_differents)) {
//    $oldpairs_decode = array_merge($oldpairs_decode, $pairs_differents);
//    file_put_contents($oldpairs, json_encode($oldpairs_decode));
//    // Write notification to log file
//    $message = date(DATE_RSS) . " : New trading pair(s) added to oldpairs.json: " . implode(", ", $pairs_differents) . "\n";
//    write_log($message);
//    echo(json_encode(array_values($pairs_differents)));
//}
//// define the function to write to log file
//function write_log($message)
//{
//    $log_file = "api_logs_mexc_" . date("Y-m-d") . ".txt";
//    $saving = file_put_contents($log_file, $message, FILE_APPEND);
//    if (!$saving) {
//        echo date(DATE_RSS) . " : ERROR: Failed to open log file " . $log_file . "\n";
//        die(); // terminate the script
//    }
//    return true;
//}
}
