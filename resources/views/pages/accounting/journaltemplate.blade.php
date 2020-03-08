@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Journal Templates
        </div>
    </div>
    <div class="card">
            <div class="card-header">
                <button href="#createJournalTemplateModal" class="btn btn-oval btn-primary" type="button" data-toggle="modal"><em class="fa mr-2 fas fa-plus"></em>Create</button>
                <div class="card-title"></div>
                <div class="text-sm"></div>
            </div>
            <div class="card-body">
                <table class="table table-striped my-4 w-100" id="datatable1">
                    <thead>
                        <tr>
                            <th data-priority="1">Action</th>
                            <th>Available in branch</th>
                            <th>Template name</th>
                            <th>Description</th>
                            <th>Debit account</th>
                            <th>Credit account</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="Received">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>No Data available</td>
                            <td></td>
                            <td></td>

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

     <!-- Delete Modal HTML -->
	<div id="createJournalTemplateModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
                    <h4 class="modal-title ">Create a General Ledger Account</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Template Name</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Available in Branch</label>
                        <select name="accounttype" class="form-control" id="accounttype">
                            <option >Select</option>
                            <option></option>
                            <option></option>
                            <option> </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label> Description</label><br>
                        <textarea id="description" rows="4" cols="75"></textarea>
                        </div>
                    <div class="form-group">
                        <label>Currency</label>
                        <select name="accounttype" class="form-control" id="accounttype">
                            <option >Select</option>
                            <option></option>
                            <option></option>
                            <option> </option>
                        </select>
                    </div>
                    </div>

                    <div class="col-md-10">
                        <div class="form-check">
                            <input class="form-check-input" id="defaultCheck1" type="checkbox" value="" />
                            <label class="form-check-label" for="defaultCheck1">Allow visibility in subbranches</label>
                        </div>
                    </div><br>
                    <div class="row-md-12">
                        <div class="col-md-12">
                        <button  class="btn btn-primary" type="button" ><em class="fa mr-2 fas fa-plus"></em>Add Debit</button>
                        <button  class="btn btn-primary float-right" type="button" ><em class="fa mr-2 fas fa-plus"></em>Add Credit</button>
                    </div>
                    </div>
                    <br>
                    <div class="col-md-10">
                      <label for="text">Journal Entries</label>
                    </div>
                    <br>
                    <div class="row-md-12">
                    <div class="col-md-12">
                        <p style= "text-align: center;"><button  class="btn btn-danger" type="submit" data-dismiss="modal" ><em class="fa mr-2 fa-times"></em>Close</button>
                        <button  class="btn btn-primary" type="submit" data-dismiss="modal"><em class="fa mr-2 fa-check"></em>Save</button></p>
                </div>
            </div>
            <br><br>
            </form>
			</div>
		</div>
	</div>
