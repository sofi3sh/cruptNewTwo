<?php

namespace App\Console\Commands;

use App\Http\Controllers\CoinMarketCalController;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class CheckAndAddListings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check-and-add-listings:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(CoinMarketCalController $controller)
    {
        Log::channel('schedule')->info('CoinMarketCalParser start');

        $controller->getListings();

//        $message = 'Check And Add Listings';
//        Log::channel('test')->info($message);
    }

}
