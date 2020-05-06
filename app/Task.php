<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'user_id',
        'branch_id',
        'status'
    ];


    protected $dates = [
        'deleted_at'
    ];


    // relations

    /**
     * tasks relation
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function taskable()
    {
        return $this->morphTo();
    }
 
}
