<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\UserWallet;
use App\Models\Wallet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WalletController extends Controller
{
    protected $userWallet=[];
    public function saveWallet(Request $request)
    {
        $userWallet = new UserWallet;
        $userWallet->user_id = $request->user()->id;
        $userWallet->name=$request->name;
        $userWallet->wallet_name=$request->wallet_name;
        $userWallet->description=$request->description;
        $userWallet->amount=$request->amount;
      $userWallet->created_at=Carbon::now();
        $userWallet->save();

        return redirect('/wallet');
    }
    public function delete($id)
    {
       $data = Wallet::find($id);
       $data->delete();
        return redirect('/wallet');
    }


}
