<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternalTradeBuyList extends Model
{
    use HasFactory;
    protected $fillable = [
    'global_user_id',
    'cronjob_list',
    'asset_purchased',
    'buy_amount',
    'buy_address',
    'pay_with',
    'chain_stack',
    'transaction_description',
    'trust_fee',
    'campain_type',
    'profit',
    'commision_id',
    'fee_from_exchange',
    'bank_changes',
    'left_over_profit',
    'total_amount_left',
    'master_load',
    ];
}