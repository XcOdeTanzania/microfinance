@extends('layouts.app')
@section('content')
    <!-- START card-->
    <div class="card card-default">
    <div class="content-heading "><h2>Journals</h2></div>
    <div class="card">
      <div class="card-header">
     <button href="#createJounalentryModal" class="btn btn-oval btn-primary" type="button" data-toggle="modal"><em class="fa mr-2 fas fa-plus"></em>Add Account</button>
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
                </div><br>
                <div><button class="btn btn-primary" type="filter">Filter</button></div>
             </fieldset>

          </form>
       </div>
    </div><!-- END card-->
 </div>
 @endsection
 @section('styles')@endsection
 @section('scripts')@endsection

  <!-- Journal Modal HTML -->

  <div id="createJounalentryModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        </div>
    </div>
</div>
