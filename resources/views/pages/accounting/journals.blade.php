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
  <div id="createJournalEntry" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>
					<div class="modal-header">						
						<h4 class="modal-title">Create Journal Entry</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label> Account Name</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label> GL Code</label>
							<input type="text" class="form-control" required>
						</div>
						
						<div class="form-group">
                            <label>Account Type</label>
                            <select name="accounttype" class="form-control" id="accounttype">
                                <option >Select</option>
                                <option>Asset </option> 
                                <option> Equity</option>
                                <option> Income</option>
                            </select>
						</div>
						<div class="form-group">
							<label> External ID</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label> Account Tags</label>
							<select name="accounttag" class="form-control" id="accountag">
                                <option >Select</option>
                                <option></option> 
                                <option> </option>
                                <option> </option>
                            </select>
                        </div>
                        
                        <div class="form-group">
							<label> Account Usage</label>
							<select name="accounttag" class="form-control" id="accountag">
                                <option >Select</option>
                                <option>GL Group</option> 
                                <option>GL Account </option>
                            </select>
						</div>
                        <div class="form-group">
							<label> Manual Entries Allowed?</label>
							<input type="checkbox" class="form-control" required>
						</div>		

                        <div class="form-group">
							<label> Enable Bank Reconcialliation?</label>
							<input type="checkbox" class="form-control" required>
						</div>	
                        <div class="form-group">
							<label> Description</label><br>
							<textarea id="description" rows="4" cols="125"></textarea>      
						</div>						
					
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
        </div>
    </div>
</div>