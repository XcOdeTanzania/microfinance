<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'address', 'logo'];

    protected $dates = ['deleted_at'];

//relations

/** 
     * company has many branches relations
     */

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }

    /**
     * Client report relationships.
     */
    public function reports()
    {
        return $this->morphMany(Report::class,'reportable');
    }

}
