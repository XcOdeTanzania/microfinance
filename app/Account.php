<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'type', 'gl_code', 'external_id', 'tag', 'usage', 'manual_entries_allowed', 'enable_bank_reconciliation'];

    protected $dates = ['deleted_at'];
}
