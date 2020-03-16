<?php

namespace App;

use App\Events\ClientCreatedEvent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Validator;

class Identification extends Model
{ 
    //
    use SoftDeletes;

    protected $fillable = [
        'attachment',
        'uuid',
        'description',
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

     // Business Logic

     public function postIdentification(Request $request,Client $client){

        $validator = Validator::make(
            $request->all(),[
                'uuid'=>'required',
                'description'=>'required',
                'type' => 'required'
        ]);

        if($validator->fails())
        return back()->with('error',$validator->errors());

        $identification = new Identification();

        $identification->uuid = $request->input('uuid');
        $identification->description = $request->input('description');
        $identification->type = $request->input('type');

        if($request->hasFile('attachment')){
            $path = $request->attachment->store('identification');
            $identification ->attachment = $path;

        

            if(!$client) 
                return back()->with('error','Client does not exist'); 

            $client->identifications()->save($identification);
        }
        else return back()->with('error','Identity attachment is required');

        event(new ClientCreatedEvent($request, $client));

     }

}
