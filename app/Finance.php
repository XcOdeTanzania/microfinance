<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{

    /**
     * Finances report relationships.
     */
    public function reports()
    {
        return $this->morphMany(Report::class, 'reportable');
    }
}
