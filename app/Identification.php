<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Identification extends Model
{ 
    //
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'file',
        'uuid',
        'type'
    ];

    protected $dates = [
        'deleted_at'
    ];

    // relations

    /**
     * Identification belongs to client
     */

     public function client()
     {
         return $this->belongsTo(Client::class);
     }
}
