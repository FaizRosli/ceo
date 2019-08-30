<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    //
    protected $fillable = [
        'bank_name', 'bank_account_number', 'bank_account_holder','user_id',
    ];
}
