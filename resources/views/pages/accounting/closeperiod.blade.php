@extends('layouts.app')
@section('content')
       <div class="container-fluid">
          <!-- DATATABLE -->
          <div class="card card-default">
            <div class="content-heading "><h2>Close Period</h2></div>
          <div class="card">
             <div class="card-header"><br>
            <button href="#addCloseFinancialPeriods" class="btn btn-oval btn-primary" type="button" data-toggle="modal"><em class="fa mr-2 fas fa-plus"></em>Close Financial Periods</button>
             <div class="card-body">
                <table class="table table-striped my-4 w-100" id="datatable1">
                   <thead>
                      <tr>
                         <th data-priority="1">Branch</th>
                         <th>Date</th>
                         <th>Account Type</th>
                         <th class="sort-numeric">Closed By</th>
                         <th class="sort-alpha" data-priority="2">Date Created</th>
                         <th>Comment</th>
                         <th>Is active</th>
                         <th>Status</th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr class="gradeC">
                         <td>Head Office</td>
                         <td>06/03/2020</td>
                         <td>Demo</td>
                         <td>18/12/2020</td>
                         <td>Mac OS 7.6-9</td>
                         <td>Tested by H</td>
                         <td><a><i class="fas fa-check"></i></a></td>
                         <td><a href="#deleteCloseFinancialPeriods" data-toggle="modal"><i class="fas fa-trash-alt" style="color:red"></i></a></td>
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
	<div id="addCloseFinancialPeriods" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Create a General Ledger Account</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
                            <label>Office</label>
                            <select name="accounttype" class="form-control" id="accounttype">
                                <option >Select</option>
                                <option>Asset </option>
                                <option> Equity</option>
                                <option> Income</option>
                            </select>
                        </div>
                        <div class="col-md-10">
                            <div class="form-check">
                                <input class="form-check-input" id="defaultCheck1" type="checkbox" value="" />
                                <label class="form-check-label" for="defaultCheck1">Sub Branch</label>
                            </div>
                        </div><br>
						<div class="form-group">
							<label> Closing Date</label>
							<input type="date" class="form-control" required>
                        </div>
                        <div class="col-md-10">
                            <div class="form-check">
                                <input class="form-check-input" id="defaultCheck1" type="checkbox" value="" />
                                <label class="form-check-label" for="defaultCheck1">Booking income and expenses</label>
                            </div>
                        </div><br>
                        <div class="form-group">
							<label> Description</label><br>
							<textarea id="description" rows="4" cols="75"></textarea>

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

  <!-- Delete Modal HTML -->
	<div id="deleteCloseFinancialPeriods" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Delete Accounting Closure</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>Are You Sure You Want To Delete This Closure?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
