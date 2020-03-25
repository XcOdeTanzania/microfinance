<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{

    public function districts()
    {
        return $this->hasMany(District::class);
    }
}

