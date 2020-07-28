<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserBill extends Model
{
    use SoftDeletes;

     protected $fillable = [
        'user_id', 'amount_to_bill', 'bill_period', 'bill_item'
    ];

    
}
