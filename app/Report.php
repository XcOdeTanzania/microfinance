<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class Report extends Model
{
    
    use SoftDeletes;

    protected $fillable = [
        'name',
        'category',
        'description'
    ];

    protected $dates = [
        'deleted_at'
    ];



    public function reportable()
    {
        return $this->morphTo();
    }

    

    public function postReport(Request $request){
        $validator = Validator::make(
            $request->all(),[
                'name'=>'required',
                'description'=>'required'
                
            ]);

            if($validator->fails())
            return back()->with('error',$validator->errors());


            $report = new Report();

            $report->name = $request->name;
            $report->description = $request->description;
            
           if($request->reportable_type === 'Client'){
              $client = Client::find($request->reportable_id);
              $client->reports()->save($report);
           }

           if($request->reportable_type === 'Group'){
            $group = Group::find($request->reportable_id);
            $group->reports()->save($report);
         }
         if($request->reportable_type === 'Saving'){
            $saving = Saving::find($request->reportable_id);
            $saving->reports()->save($report);
         }

         if($request->reportable_type === 'Loan'){
            $loan = Loan::find($request->reportable_id);
            $loan->reports()->save($report);
         }

         if($request->reportable_type === 'Company'){
            $company = Company::find($request->reportable_id);
            $company->reports()->save($report);
         }
         if($request->reportable_type === 'Finance'){
            $finance = Loan::find($request->reportable_id);
            $finance->reports()->save($report);
         }
            
    }
}
