<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class TradingInKucoin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trading-in-kucoin:run';

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
        $message = 'Trading In Kucoin';
        for ($i = 1; $i<=5; $i++) {

            Log::channel('test')->info($message);

            sleep(1);
        }
    }
}
