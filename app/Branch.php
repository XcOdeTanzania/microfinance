<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name',
        'location',
        'company_id'
    ];


    // relations

    /** 
     * branch has many client relations
     */

    public function clients()
    {
        return $this->hasMany(Client::class);
    }
    
}
