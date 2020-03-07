@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Loan
            <small></small>
        </div>
    </div>
    <div class="card">
            <div class="card-header">
                <div class="card-title">Create Loan</div>
                <div class="text-sm">DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: $().DataTable();.</div>
            </div>
            <div class="card-body">
                <table class="table table-striped my-4 w-100" id="datatable1">
                    <thead>
                        <tr>
                            <th data-priority="1">Client ID</th>
                            <th>Dispaly Name</th>
                            <th>Branch</th>
                            <th class="sort-alpha">Group</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeX">
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td>4</td>
                            <td><button class="btn btn-label"><span><i class="fa fa-eye"></i> </span> select</button></td>
                        </tr>
                        <tr class="gradeC">
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td>4</td>
                            <td><button class="btn btn-label"><span><i class="fa fa-eye"></i> </span>select</button></td>
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