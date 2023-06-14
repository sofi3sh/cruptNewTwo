<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Виконуємо GET-запит до API Binance
        $response = Http::get('https://api.mexc.com/api/v3/account');

        // Отримуємо статус відповіді
        $status = $response->status();

        if ($status === 200) {
            // Отримуємо відповідь API у вигляді масиву
            $data = $response->json();

            // Отримуємо ціну Bitcoin з відповіді API
           // $bitcoinPrice = $data['price'];

            // Виводимо ціну Bitcoin
            //  echo "Ціна Bitcoins: $bitcoinPrice USD";
        } else {
            $data = 0;
            // Обробка помилки, якщо статус відповіді не 200
            // echo 'Не вдалося отримати ціну Bitcoin';
        }


        return view('test.order', ['acount'=>$data]);

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
