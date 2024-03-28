<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'partner_transactions';

    protected $fillable  = [
        "id",
        "user_id",
        "title",
        "description",
        "amount",
        "transaction_id",
        "product",
        "payment_gateway",
        "amount_wthgst",
        "current_wblnc",
        "old_balance",
        "wallet_point"
    ];
}
