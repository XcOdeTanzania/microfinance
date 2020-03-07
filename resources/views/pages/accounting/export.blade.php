@extends('layouts.app')
@section('content')


    <!-- START card-->
        <div class="card card-default">
        <div class="content-heading "><h2>Account Export</h2></div>
       <div class="card-body">
          <form class="form-horizontal" method="get" action="/">
             <fieldset>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Office</label>
                   <div class="col-md-10"><select name="accounttag" class="form-control" id="accountag">
                    <option >Select</option>
                    <option></option>
                    <option> </option>
                    <option> </option>
                </select></div>
                </div>
             </fieldset>
             <fieldset>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">Start Clouser</label>
                   <div class="col-md-10"><select name="accounttag" type="date" class="form-control" id="accountag">
                    <option >Select</option>
                    <option></option>
                    <option> </option>
                    <option> </option>
                </select></div>
                </div>
             </fieldset>
             <fieldset>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">End Clouser</label>
                   <div class="col-md-10"><select name="accounttag" type="date" class="form-control" id="accountag">
                    <option >Select</option>
                    <option></option>
                    <option> </option>
                    <option> </option>
                </select></div>
                </div>
             </fieldset>
             <fieldset>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">References</label>
                   <div class="col-md-10"><input class="form-control" id="input-id-1" type="text"></div>
                </div>
             </fieldset>
             <fieldset>
                <div class="form-group row"><label class="col-md-2 col-form-label" for="input-id-1">File Format</label>
                    <div class="col-md-10"><select name="accounttag" type="date" class="form-control" id="accountag">
                     <option >Select</option>
                     <option></option>
                     <option> </option>
                     <option> </option>
                 </select></div>

             </fieldset>
             <fieldset>
                <br>
             <div class="form-check"><label class="form-check-label" for="defaultCheck"> </label><input class="form-check-input" id="defaultCheck2" type="checkbox" value="">Aggregate Balance of Sub-Offices</div>
            <br>
               <div><button class="btn btn-primary" type="download"><span class="fas fa-file">&nbsp; </span>Download Report</button></div>
            </fieldset>
          </form>
       </div>
    </div><!-- END card-->
 </div>
 @endsection
 @section('styles')@endsection
 @section('scripts')@endsection
