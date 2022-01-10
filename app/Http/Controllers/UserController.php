<?php

namespace App\Http\Controllers;

use App\Models\User;
use Bavix\Wallet\Traits\HasWallet;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class UserController extends BaseController
{


    public function index()
    {
        $user = auth()->user();
        return view('wallet/wallet',['user',$user]);
    }


}
