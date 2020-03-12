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
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
            var actions = $("table td:last-child").html();
            // Append table with add row form on add new button click
            $(".add-new").click(function(){
                $(this).attr("disabled", "disabled");
                var index = $("table tbody tr:last-child").index();
                var row = '<tr>' +
                    '<td><input type="text" class="form-control" name="name" id="name"></td>' +
                    '<td><input type="text" class="form-control" name="department" id="department"></td>' +
                    '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                    '<td>' + actions + '</td>' +
                '</tr>';
                $("table").append(row);
                $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                $('[data-toggle="tooltip"]').tooltip();
            });
            // Add row on add button click
            $(document).on("click", ".add", function(){
                var empty = false;
                var input = $(this).parents("tr").find('input[type="text"]');
                input.each(function(){
                    if(!$(this).val()){
                        $(this).addClass("error");
                        empty = true;
                    } else{
                        $(this).removeClass("error");
                    }
                });
                $(this).parents("tr").find(".error").first().focus();
                if(!empty){
                    input.each(function(){
                        $(this).parent("td").html($(this).val());
                    });
                    $(this).parents("tr").find(".add, .edit").toggle();
                    $(".add-new").removeAttr("disabled");
                }
            });
            // Edit row on edit button click
            $(document).on("click", ".edit", function(){
                $(this).parents("tr").find("td:not(:last-child)").each(function(){
                    $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
                });
                $(this).parents("tr").find(".add, .edit").toggle();
                $(".add-new").attr("disabled", "disabled");
            });
            // Delete row on delete button click
            $(document).on("click", ".delete", function(){
                $(this).parents("tr").remove();
                $(".add-new").removeAttr("disabled");
            });
        });
        </script>
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
                        <textarea id="description" rows="4" cols="60"></textarea>
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
                        <button  class="btn btn-primary add-new" type="button" ><em class="fa mr-2 fas fa-plus"></em>Add Debit</button>
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
