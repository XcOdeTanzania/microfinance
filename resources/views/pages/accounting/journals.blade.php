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
            <form>
                <div class="modal-header">
                    <h4 class="modal-title-centred" > Create a General Ledger Account</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <fieldset>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 mb-3">

                                        <div class="form-group">
                                            <select name="accounttag" class="form-control" id="accountag">
                                                <option >Select Account</option>
                                                <option></option>
                                                <option> </option>
                                                <option> </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <select name="accounttag" class="form-control" id="accountag">
                                                <option >Select Account</option>
                                                <option></option>
                                                <option> </option>
                                                <option> </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <select name="accounttag" class="form-control" id="accountag">
                                                <option >Select Brach</option>
                                                <option></option>
                                                <option> </option>
                                                <option> </option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <select name="accounttag" class="form-control" id="accountag">
                                                <option >Select Brach</option>
                                                <option></option>
                                                <option> </option>
                                                <option> </option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input class="form-control" type="text"  placeholder="Ammount" />

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input class="form-control" type="text"  placeholder="Ammount" />

                                    </div>
                                    <br><br>
                                    <div class="col-md-6 mb-3">
                                        <span class="form-text"><b>Total Debited</b></span>
                                        <input class="form-control" type="text"  placeholder="" />

                                    </div><br><br>
                                    <div class="col-md-6 mb-3">
                                        <span class="form-text"><b>Total Credit</b></span>
                                        <input class="form-control" type="text"  placeholder="" />

                                    </div>

                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <span class="form-text"><b>Journal Entry Tags</b></span>
                                <select name="accounttag" class="form-control" id="accountag">
                                    <option >Address_Type</option>
                                    <option></option>
                                    <option> </option>
                                    <option> </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <span class="form-text"><b>Currency Code</b></span>
                                <select name="accounttag" class="form-control" id="accountag">
                                    <option >Select Currency</option>
                                    <option></option>
                                    <option> </option>
                                    <option> </option>
                                </select>
                            </div><br>
                            <div class="form-group">
                                <label><b>Reference</b></label>
                                <input type="text" class="form-control" required>
                            </div><br>
                            <div class="form-group">
                                <label><b>Comment</b></label><br>
                                <textarea id="description" rows="4" cols="120"></textarea>

                            </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Add">
                    <input type="button" class="btn btn-danger" data-dismiss="modal" value="Close">

                </div>
            </form>
        </div>
    </div>
</div>


