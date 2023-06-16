<?php


use App\Http\Controllers\CoinController;
use App\Http\Controllers\CoinMarketCalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\DashboardController;

// Auth
//Route::get('/auth',      [AuthController::class, 'showAuthPage'])->name('showAuthPage');
//Route::post('/login',    [AuthController::class, 'login'])       ->name('login');
//Route::post('/register', [AuthController::class, 'register'])    ->name('register');
//Route::get('/logout',    [AuthController::class, 'logout'])      ->name('logout');

// під час розробки закоментован middleware
//Route::middleware(['auth'])->group(function () {

Route::get('/',                  [HomeController::class, 'index'])                  ->name('home');
Route::get('/main',              [HomeController::class, 'create'])                 ->name('create');
Route::post('/main',             [HomeController::class, 'store'])                  ->name('main.store');

Route::get('/coin',              [CoinController::class, 'index'])                  ->name('test.coin');

// треба буде уточнити, чи буде можливість користувачу
// передивлятись профіль інших користувачів(мабуть ні)
// тому поки не передаємо id
Route::get('/user-profile',      [UserController::class, 'userProfile'])            ->name('user-profile');
//});

// це тестові роути
Route::get('/listings',              [CoinMarketCalController::class, 'index']);
Route::get('/order',              [OrderController::class, 'index']);
Route::get('/price',              [PriceController::class, 'index']);
//Route::get('/get-current-price',     [CoinMarketCalController::class, 'mexc']);
//Route::get('/balance',               [CoinMarketCalController::class, 'getBalance']);


Route::get('/dashboard',              [DashboardController::class, 'index']);


