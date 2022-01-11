<?php

namespace App\Http\Controllers;

use App\Models\UserWallet;
use Illuminate\Http\Request;
use App\Models\Wallet;
use Illuminate\Support\Facades\DB;

class ShowWalletController extends Controller
{
    public function show()
    {
       $data= DB::table('user_wallets')->get();
       return view('/wallet.wallet',['data'=>$data]);

     //   $wallets= UserWallet::all()->toArray();
     //  return view('wallet.wallet',compact('wallets'));
    }
}
