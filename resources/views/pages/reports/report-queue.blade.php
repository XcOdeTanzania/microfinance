@extends('layouts.app')

@section('styles')
    
@endsection


@section('content')
        <div class="content-heading">
            <div>Report Queue</div>
        </div>
        <div class="container-fluid">
            <div class="card">
                 <!--<div class="card-header">
                    <div class="card-title">Key Table</div>
                    <div class="text-sm">KeyTable allows you to use keyboard navigation on a DataTables enhanced table, like an Excel spreadsheet.</div>
                </div> -->
                <div class="card-body">
                    <form action="" class="well p-4 mb-3">
                        <div class="form-group row">
                            <label for="reportname" class="col-sm-2 col-form-label">Report Name</label>
                            <div class="col-sm-4">
                                <select name="" id="reportname" class="custom-select">
                                    <option selected>-- Select an option --</option>
                                    <option value="1">Accrued Interest in Period</option>
                                    <option value="2">Accrued Interest Report</option>
                                    <option value="3">Balance Sheet</option>
                                    <option value="4">Disbursed Loans Report</option>
                                    <option value="5">Insitution Arrears Report</option>
                                    <option value="6">Journals Report</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Created on Date" class="col-sm-2 col-form-label">Created on Date</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="reportname" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-4">
                                <select name="" id="reportname" class="custom-select">
                                    <option selected>-- Select an option --</option>
                                    <option value="1">Pending</option>
                                    <option value="2">Processing</option>
                                    <option value="3">Completed</option>
                                    <option value="4">Expired</option>
                                    <option value="5">Failed</option>
                                    <option value="6">Deleted</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="reportname" class="col-sm-2 col-form-label">File Format</label>
                            <div class="col-sm-4">
                                <select name="" id="reportname" class="custom-select">
                                    <option selected>-- Select an option --</option>
                                    <option value="1">PDF</option>
                                    <option value="2">XLS</option>
                                    <option value="3">CSV</option>
                                    <option value="4">HTML</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div> 
                    </form>

                    <button type="submit" class="btn btn-primary mb-3" onclick="">
                        <i class="fas fa-redo-alt"></i>
                        &nbsp;Refresh
                    </button>

                    <table class="table table-striped my-4 w-100" id="datatable1">
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection

@section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
@endsection