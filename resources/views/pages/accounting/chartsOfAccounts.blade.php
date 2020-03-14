@extends('layouts.app')
@section('content')

       <div class="container-fluid">
          <!-- DATATABLE -->
          <div class="card card-default">
            <div class="content-heading "><h2>Charts of Accounts</h2></div>
          <div class="card">
             <div class="card-header"><br>
            <button href="#addAccountModal" class="btn btn-oval btn-primary" type="button" data-toggle="modal"><em class="fa mr-2 fas fa-plus"></em>Add Account</button>
             <div class="card-body">
                <table class="table table-striped my-4 w-100" id="datatable1">
                   <thead>
                      <tr>
                         <th data-priority="1">GL-Code</th>
                         <th>Account Name</th>
                         <th>Account Type</th>
                         <th class="sort-numeric">External ID</th>
                         <th class="sort-alpha" data-priority="2">Account Tag</th>
                         <th>Balance</th>
                         <th>Unreconciled Balance</th>
                         <th>Status</th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr class="gradeC">
                         <td>001</td>
                         <td>zematty</td>
                         <td>Tasman</td>
                         <td>Internet Explorer 5.1</td>
                         <td>Mac OS 7.6-9</td>
                         <td>1</td>
                         <td>C</td>
                         <td><a href="#editAccountModal"data-toggle="modal"><span class="todo-edit fas fa-pencil-alt" style="color:black"></span></a></td>
                      </tr>
                      <tr class="gradeC">
                        <td>002</td>
                        <td>zematty</td>
                         <td>Tasman</td>
                         <td>Internet Explorer 5.2</td>
                         <td>Mac OS 8-X</td>
                         <td>1</td>
                         <td>C</td>
                         <td><a href="#editAccountModal"data-toggle="modal"><span class="todo-edit fas fa-pencil-alt" style="color:black"></span></a></td>
                      </tr>
                      <tr class="gradeA">
                        <td>003</td>
                        <td>zematty</td>
                         <td>Misc</td>
                         <td>NetFront 3.1</td>
                         <td>Embedded devices</td>
                         <td>-</td>
                         <td>C</td>
                         <td><a href="#editAccountModal"data-toggle="modal"><span class="todo-edit fas fa-pencil-alt" style="color:black"></span></a></td>
                      </tr>

                   </tbody>
                </table>
             </div>

          </div>


    @endsection
    @section('styles')@endsection
    @section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
    @endsection

    <!-- Add Modal HTML -->
	<div id="addAccountModal" class="modal fade">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Create a General Ledger Account</h4>
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
                        <div class="col-md-10">
                            <div class="form-check">
                                <input class="form-check-input" id="defaultCheck1" type="checkbox" value="" />
                                <label class="form-check-label" for="defaultCheck1">Manual Entries Allowed?</label>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-10">
                            <div class="form-check">
                                <input class="form-check-input" id="defaultCheck1" type="checkbox" value="" />
                                <label class="form-check-label" for="defaultCheck1">Enable Bank Reconciliation?</label>
                            </div>
                        </div><br>
                        <div class="form-group">
							<label> Description</label><br>
							<textarea id="description" rows="4" cols="70"></textarea>

						</div>
					</div>
					<div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Add">
						<input type="button" class="btn btn-danger" data-dismiss="modal" value="Close">

					</div>
				</form>
			</div>
		</div>
    </div>

    <!-- Edit Modal HTML -->
	<div id="editAccountModal" class="modal fade">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Create a General Ledger Account</h4>
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
                        <div class="col-md-10">
                            <div class="form-check">
                                <input class="form-check-input" id="defaultCheck1" type="checkbox" value="" />
                                <label class="form-check-label" for="defaultCheck1">Manual Entries Allowed?</label>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-10">
                            <div class="form-check">
                                <input class="form-check-input" id="defaultCheck1" type="checkbox" value="" />
                                <label class="form-check-label" for="defaultCheck1">Enable Bank Reconciliation?</label>
                            </div>
                        </div><br>
                        <div class="form-group">
							<label> Description</label><br>
							<textarea id="description" rows="4" cols="70"></textarea>

						</div>
					</div>
					<div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Add">
						<input type="button" class="btn btn-danger" data-dismiss="modal" value="Close">

					</div>
				</form>
			</div>
		</div>
	</div>
