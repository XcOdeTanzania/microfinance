@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="content-heading">
        <button href="#createJournalEntry" class="btn btn-oval btn-primary" type="button" data-toggle="modal"><em class="fa mr-2 fas fa-plus"></em>Create Journal Entry</button>
    </div>
    <!-- START card-->
    <div class="card card-default">
       
       <div class="card-body">
          <form class="form-horizontal" method="get" action="/">
             <fieldset>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Account</label>
                   <div class="col-md-10"><select name="accounttag" class="form-control" id="accountag">
                    <option >Select</option>
                    <option></option> 
                    <option> </option>
                    <option> </option>
                </select></div>
                </div>
             </fieldset>
             <fieldset>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Bracnh</label>
                   <div class="col-md-10"><select name="accounttag" class="form-control" id="accountag">
                    <option >Select</option>
                    <option></option> 
                    <option> </option>
                    <option> </option>
                </select></div>
                </div>
             </fieldset>
             <fieldset>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Transaction From</label>
                   <div class="col-md-10"><input class="form-control" id="input-id-1" type="text"></div>
                </div>
             </fieldset>
             <fieldset>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">To</label>
                   <div class="col-md-10"><input class="form-control" id="input-id-1" type="text"></div>
             </fieldset>
             <fieldset>
                <div class="form-group row"><label class="col-md-2 col-form-label"></label>
                   <div class="col-md-10">
                      <div class="form-check"><input class="form-check-input" id="defaultCheck1" type="checkbox" value=""><label class="form-check-label" for="defaultCheck1">Group Entries Reference</label></div>
                      <div class="form-check"><input class="form-check-input" id="defaultCheck2" type="checkbox" value=""><label class="form-check-label" for="defaultCheck2">Show only reconciled</label></div>
                      <div class="form-check"><input class="form-check-input" id="defaultCheck2" type="checkbox" value=""><label class="form-check-label" for="defaultCheck2">Show only Unreconciled</label></div>
                      <br><br>
                      <div><button class="btn btn-primary" type="filter">Filter</button></div>
                   </div>
                </div>
             </fieldset>
            
          </form>
       </div>
    </div><!-- END card-->
 </div>
 @endsection
 @section('styles')@endsection
 @section('scripts')@endsection
