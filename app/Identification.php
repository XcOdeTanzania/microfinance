<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Identification extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'attachment',
        'uuid',
        'expiry_date',
        'type',
        'client_id'
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
