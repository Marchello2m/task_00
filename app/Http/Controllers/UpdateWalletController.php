<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\WalletUpdate;
use Illuminate\Support\Facades\DB;

class UpdateWalletController extends Controller
{
    public function update(Request $request)
    {
       $walletUpdate= WalletUpdate::find($request->id);
       $walletUpdate->name=$request->name;
       $walletUpdate->wallet_name=$request->wallet_name;
       $walletUpdate->description=$request->description;
       $walletUpdate->amount=$request->amount;
        $walletUpdate->updated_at=Carbon::now();
       $walletUpdate->save();


        return redirect('/wallet');

    }
    public function showUpdate()
    {
        $data= DB::table('user_wallets')->get();
        return view('/wallet.update-wallet',['data'=>$data]);

    }
}
