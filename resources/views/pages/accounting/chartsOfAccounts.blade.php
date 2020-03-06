@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
       <div class="content-heading">
          <div>Charts Of Accounts</div>
       </div>
       <div class="container-fluid">
          <!-- DATATABLE -->
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
                         <td><a href="#editAccountModal"data-toggle="modal"><span class="todo-edit fas fa-pencil-alt"></span></a></td>
                      </tr>
                      <tr class="gradeC">
                        <td>002</td>
                        <td>zematty</td>
                         <td>Tasman</td>
                         <td>Internet Explorer 5.2</td>
                         <td>Mac OS 8-X</td>
                         <td>1</td>
                         <td>C</td>
                         <td><a href="#editAccountModal"data-toggle="modal"><span class="todo-edit fas fa-pencil-alt"></span></a></td>
                      </tr>
                      <tr class="gradeA">
                        <td>003</td>
                        <td>zematty</td>
                         <td>Misc</td>
                         <td>NetFront 3.1</td>
                         <td>Embedded devices</td>
                         <td>-</td>
                         <td>C</td>
                         <td><a href="#editAccountModal"data-toggle="modal"><span class="todo-edit fas fa-pencil-alt"></span></a></td>
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
		<div class="modal-dialog">
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
							<textarea id="description" rows="4" cols="75"></textarea>
                               
						</div>						
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
    </div>
    
    <!-- Edit Modal HTML -->
	<div id="editAccountModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Edit a General Ledger Account</h4>
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
							<textarea id="description" rows="4" cols="75"></textarea>
                               
						</div>						
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>