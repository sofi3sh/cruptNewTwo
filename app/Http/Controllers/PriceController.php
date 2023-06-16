<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PriceController extends BasicController
{
    public function index(){
        // Виконуємо GET-запит до API Binance
        $response = Http::get('https://api.mexc.com/api/v3/ticker/price', [
            'symbol' => 'BTCUSDT'
        ]);

        // Отримуємо статус відповіді
        $status = $response->status();

        if ($status === 200) {
            // Отримуємо відповідь API у вигляді масиву
            $data = $response->json();

            // Отримуємо ціну Bitcoin з відповіді API
            $bitcoinPrice = $data['price'];

            // Виводимо ціну Bitcoin
            //  echo "Ціна Bitcoins: $bitcoinPrice USD";
        } else {
            // Обробка помилки, якщо статус відповіді не 200
            // echo 'Не вдалося отримати ціну Bitcoin';
        }
        $deposit = 7700000;
        $max_deposit =  $deposit*0.005; // 0.5% 38500
        $price = $bitcoinPrice;
        $price_close_profit =  $price*1.005; // 0.5% profit
        $price_close_loss =  $price*1.002; // 0.2% loss
        $voleum = '';  // x
        $voleum = $max_deposit/$price; //1,49
        $profit = $max_deposit*0.005 ; // profit
        $loss = $max_deposit*0.002;
        $result = [
            'deposit'=>$deposit,
            'max_deposit'=>$max_deposit,
            'price_close_profit'=>$price_close_profit,
            'price_close_loss'=>$price_close_loss,
            'price'=>$price,
            'profit'=>$profit,
            'loss'=>$loss,
            'voleum'=>$voleum,
        ];

        return view('test.price', ['result'=>$result, 'bitcoinPrice'=>$bitcoinPrice]);
    }
}
