<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\ShowWalletController;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/wallet', function () {
    return view('wallet/wallet');
})->middleware(['auth'])->name('wallet');

Route::get('/create-wallet', function () {
   return view('wallet/create-wallet');
})->middleware(['auth'])->name('create-wallet');

//Route::view('/create-wallet','create-wallet');
Route::post('/create-wallet',[WalletController::class,'saveWallet']);
//Route::post('/create-wallet',[WalletController::class,'addAmount']);

Route::get('/wallet',[ShowWalletController::class,'show']);





require __DIR__.'/auth.php';
