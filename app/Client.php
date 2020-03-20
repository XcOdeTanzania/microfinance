<?php

namespace App;

use App\Events\ClientCreatedEvent;
use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;



class Client extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name', 'email', 'password',
        'registration_date',
        'terms_and_condition'
    ];

    protected $dates = [
        'deleted_at'
    ];

    // relations

    /**
     * client has one business relation
     * 
     */
    public function business()
    {
        return $this->hasOne(Business::class);
    }


    /**
     * client belongs to one group relation
     * 
     */

    public function group()
    {
        return $this->belongsTo(Group::class);
    }


    // relations


    /**
     * client belongs to branch
     */

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    /**
     * client has many identifications
     */

    public function identifications()
    {
        return $this->hasMany(Identification::class);
    }

    /**
     * client has many kins
     */

    public function kins()
    {
        return $this->hasMany(Kin::class);
    }

    /**
     * Loan polymorphic to client.
     */
    public function loans()
    {
        return $this->morphMany(Loan::class, 'loanable');
    }

    /**
     * client has one share
     */

    public function share()
    {
        return $this->hasOne(Share::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Business Logic
   


    /**
     * Client report relationships.
     */
    public function reports()
    {
        return $this->morphMany(Report::class, 'reportable');
    }

    /**
     * get client profile
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function profile()
    {
        return $this->morphOne(Profile::class, 'profileable');
    }

    


    /**
     * get Client reports.
     */
    public function getClientsReports()
    { //define accessor 
        if ($this->reportable_type == 'App\Client') return $this->reports;
        return null;
    }


    // Business Logic
}
