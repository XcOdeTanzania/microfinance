@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Product Group
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <button href="#AddproducLoantsGroupModal" class="btn btn-oval btn-primary" type="button" data-toggle="modal"><em class="fa mr-2 fas fa-plus"></em>Create Product Group for Loans</button>
        </div>
        <div class="card-body">
            <div class="table-responsive bootgrid">
                <table class="table table-striped" id="bootgrid-command">
                    <thead>
                        <tr>
                            <th >Product Group</th>
                            <th >Parent</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Single Loan Product</td>
                            <td></td>
                            <td></td>
                            <td><a href="#AddproducSavingGroupModal"data-toggle="modal"><span class="todo-edit fas fa-pencil-alt" style="color:black"></td>
                            <td><a href="#deleteLoanGroup" data-toggle="modal"><i class="fas fa-trash-alt" style="color:red"></i></a></td>
                        </tr>
                        <tr>
                            <td>Individual Loan Product</td>
                            <td></td>
                            <td></td>
                            <td><a href="#AddproducSavingGroupModal"data-toggle="modal"><span class="todo-edit fas fa-pencil-alt" style="color:black"></td>
                            <td><a href="#deleteLoanGroup" data-toggle="modal"><i class="fas fa-trash-alt" style="color:red"></i></a></td>
                        </tr>
                        <tr>
                            <td>Group Loan</td>
                            <td></td>
                            <td></td>
                            <td><a href="#AddproducSavingGroupModal"data-toggle="modal"><span class="todo-edit fas fa-pencil-alt" style="color:black"></span></a></td>
                            <td><a href="#deleteLoanGroup" data-toggle="modal"><i class="fas fa-trash-alt" style="color:red"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <section>
        <div class="content-heading">
            <div>
                Product Group
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <button href="#AddproducSavingGroupModal" class="btn btn-oval btn-primary" type="button" data-toggle="modal"><em class="fa mr-2 fas fa-plus"></em>Create Product Group for Saving</button>
            </div>
            <div class="card-body">
                <div class="table-responsive bootgrid">
                    <table class="table table-striped" id="bootgrid-command">
                        <thead>
                            <tr>
                                <th >Product Group</th>
                                <th >Parent</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Single Saving Product</td>
                                <td></td>
                                <td></td>
                                <td><a href="#EditproducSavingGroupModal"data-toggle="modal"><span class="todo-edit fas fa-pencil-alt" style="color:black"></td>
                                <td><a href="#deleteSavingGroup" data-toggle="modal"><i class="fas fa-trash-alt" style="color:red"></i></a></td>
                            </tr>
                            <tr>
                                <td>Individual Saving Product</td>
                                <td></td>
                                <td></td>
                                <td><a href="#EditproducSavingGroupModal"data-toggle="modal"><span class="todo-edit fas fa-pencil-alt" style="color:black"></td>
                                <td><a href="#deleteSavingGroup" data-toggle="modal"><i class="fas fa-trash-alt" style="color:red"></i></a></td>
                            </tr>
                            <tr>
                                <td>Group Saving</td>
                                <td></td>
                                <td></td>
                                <td><a href="#EditproducSavingGroupModal"data-toggle="modal"><span class="todo-edit fas fa-pencil-alt" style="color:black"></span></a></td>
                                <td><a href="#deleteSavingGroup" data-toggle="modal"><i class="fas fa-trash-alt" style="color:red"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('styles')@endsection
@section('scripts')
@endsection

<!-- Add Loan Modal HTML -->
<div id="AddproducLoantsGroupModal" class="modal fade">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Create Product Group</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label> Name</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Parent Type</label>
                        <select name="accounttype" class="form-control" id="accounttype">
                            <option >Select</option>
                            <option>TSHs</option>
                            <option>KSH</option>
                            <option> USD</option>
                        </select>
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

<!-- Add Saving Modal HTML -->
<div id="AddproducSavingGroupModal" class="modal fade">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Create Product Group</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label> Name</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Parent Type</label>
                        <select name="accounttype" class="form-control" id="accounttype">
                            <option >Select</option>
                            <option>TSHs</option>
                            <option>KSH</option>
                            <option> USD</option>
                        </select>
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


<!-- Edit  Saving Modal HTML -->
<div id="EditproducSavingGroupModal" class="modal fade">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Create Product Group</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label> Name</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Parent Type</label>
                        <select name="accounttype" class="form-control" id="accounttype">
                            <option >Select</option>
                            <option>TSHs</option>
                            <option>KSH</option>
                            <option> USD</option>
                        </select>
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
<!-- Edit  Loan Modal HTML -->
<div id="EditproducSavingGroupModal" class="modal fade">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Create Product Group</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label> Name</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Parent Type</label>
                        <select name="accounttype" class="form-control" id="accounttype">
                            <option >Select</option>
                            <option>TSHs</option>
                            <option>KSH</option>
                            <option> USD</option>
                        </select>
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

<!-- Delete Loan Modal HTML -->
<div id="deleteLoanGroup" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-body">
                    <p>Are You Sure You Want To Delete This </p>
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

<!-- Delete Saving Modal HTML -->
<div id="deleteSavingGroup" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-body">
                    <p>Are You Sure You Want To Delete This </p>
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
