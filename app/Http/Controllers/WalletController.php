<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserWallet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function saveWallet(Request $request)
    {
        $userWallet = new UserWallet;
        $userWallet->user_id=1;
        $userWallet->name=$request->name;
        $userWallet->description=$request->description;
        $userWallet->amount=$request->amount;
        $userWallet->save();
    }
}
