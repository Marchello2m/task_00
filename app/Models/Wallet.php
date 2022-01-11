<?php

namespace App\Models;

use Bavix\Wallet\Traits\HasWallet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserWallet;
class Wallet extends Model
{
    use HasFactory,HasWallet;
    protected $table = 'user_wallets';


}
