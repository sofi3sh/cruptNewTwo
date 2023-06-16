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


        return view('test.price', ['bitcoinPrice'=>$bitcoinPrice]);
    }
}
