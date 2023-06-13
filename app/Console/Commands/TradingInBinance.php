<?php

namespace App\Console\Commands;

use App\Http\Controllers\HomeController;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class TradingInBinance extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trading-in-binance:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $message = 'Trading In Binance';
//        $controller->testBinance($message);
//        for ($i = 1; $i<=5; $i++) {
//
            Log::channel('test')->info($message);
//
//            sleep(1);
//        }
    }
}
