<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GroupLoan extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'group_id',
        'amount',
        'interest'
    ];


    protected $dates = [
        'deleted_at'
    ];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

}
