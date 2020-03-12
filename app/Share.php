<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Share extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'account_name', 'client_id', 'saving_account_number', 'approved_share', 'product_name'];

    protected $dates = ['deleted_at'];
}
