@extends('layouts.app');

@section('styles')
    
@endsection


@section('content')
        <div class="content-heading">
            <div>Report Queue</div>
        </div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="card bg-red">
                        <div class="card-body">
                            <form action="">
                                <div class="form-group row">
                                    <label for="reportname" class="col-sm-2 col-form-label">Report Name</label>
                                    <div class="col-sm-10">
                                        <select name="" id="reportname" class="custom-select">
                                            <option selected>-- Select an option --</option>
                                            <option value="1">Accrued Interest in Period</option>
                                            <option value="1">Accrued Interest Report</option>
                                            <option value="1">Balance Sheet</option>
                                            <option value="1">Disbursed Loans Report</option>
                                            <option value="1">Insitution Arrears Report</option>
                                            <option value="1">Journals Report</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Created on Date" class="col-sm-2 col-form-label">Created on Date</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="reportname" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select name="" id="reportname" class="custom-select">
                                            <option selected>-- Select an option --</option>
                                            <option value="1">Pending</option>
                                            <option value="1">Processing</option>
                                            <option value="1">Completed</option>
                                            <option value="1">Expired</option>
                                            <option value="1">Failed</option>
                                            <option value="1">Deleted</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="reportname" class="col-sm-2 col-form-label">File Format</label>
                                    <div class="col-sm-10">
                                        <select name="" id="reportname" class="custom-select">
                                            <option selected>-- Select an option --</option>
                                            <option value="1">PDF</option>
                                            <option value="1">XLS</option>
                                            <option value="1">CSV</option>
                                            <option value="1">HTML</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div> 
                    
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">
                            <span>&#8635</span>
                            Refresh
                        </button>
                    </div>

                    <table class="table table-striped table-bordered my-4 w-100" id="datatable1">
                        <thead>
                            <tr>
                                <th data-priority="1">Id</th>
                                <th>Name</th>
                                <th>Base Entity</th>
                                <th>Created By</th>
                                <th>Created On Date</th>
                                <th>Download Counter</th>
                            </tr>
                        </thead>
                        <tbody>
                                <td>No results found</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection