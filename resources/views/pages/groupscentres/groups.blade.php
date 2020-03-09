@extends('layouts.app')
@section('content')
    <!-- START card-->
    <div class="card card-default">
    <div class="content-heading "><h2>Groups</h2></div>
    <div class="card">
      <div class="card-header">
      <div class="card-body">
          <form class="form-horizontal" method="get" action="/">
             <fieldset>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Branch</label>
                   <div class="col-md-10"><select name="accounttag" class="form-control" id="accountag">
                    <option >Select</option>
                    <option></option>
                    <option> </option>
                    <option> </option>
                </select></div>
                </div>
             </fieldset>
             <fieldset>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Loan Office</label>
                   <div class="col-md-10"><select name="accounttag" class="form-control" id="accountag">
                    <option >Select</option>
                    <option></option>
                    <option> </option>
                    <option> </option>
                </select></div>
                </div>
                <br>
                <div><button class="btn btn-primary" type="filter">Search</button></div>
             </fieldset>
          </form>
       </div>
    </div><!-- END card-->
 </div>
 @endsection
 @section('styles')@endsection
 @section('scripts')@endsection

