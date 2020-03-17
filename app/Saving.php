<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{

    /**
     * Savings report relationships.
     */
    public function reports()
    {
        return $this->morphMany(Report::class, 'reportable');
    }

    public function getSavingsReports()
    { //define accessor 
        if ($this->reportable_type == 'App\Saving') return $this->reports;
        return null;
    }
}
