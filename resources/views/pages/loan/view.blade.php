@extends('layouts.app');
@section('content')
    <div class="content-heading">
        <div>
            Loans
            <small>All load with in microfinance</small>
        </div>
    </div>
    <div class="container-fluid">
        <!-- DATATABLE TO VIEW ALL LOANS D -->
        <div class="card">
            <div class="card-header">
                <div class="card-title">All Loans</div>
                <!-- <div class="text-sm">
                    When displaying data in a DataTable, it can often be useful to your end users for them to have the ability to obtain the data from the DataTable, extracting it into a file for them
                    to use locally. This can be done with either HTML5 based buttons or Flash buttons.
                </div> -->
            </div>
            <div class="card-body">
                <table class="table table-striped my-4 w-100" id="datatable2">
                    <thead>
                        <tr>
                            <th data-priority="1">Account Nbr</th>
                            <th>Branch</th>
                            <th>Loan Officer</th>Group Name</th>
                            <th class="sort-alpha" >Amount</th>
                            <th class="sort-alpha" >Balance</th>
                            <th class="sort-alpha" >Disbursed</th>
                            <th class="sort-alpha" >Product Name</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeX">
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td>4</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td><a href="/loan/details"><button class="btn btn-primary" type="submit"><i class="fa fa-eye">&nbsp;view</i></a></td>
                        </tr>
                        <tr class="gradeC">
                            <td>Trident</td>
                            <td>Internet Explorer 5.0</td>
                            <td>Win 95+</td>
                            <td>5</td>
                            <td>C</td>
                            <td>X</td>
                            <td>X</td>
                            <td><button class="btn btn-primary"><i class="fa fa-eye">&nbsp;view</i></a></td>
                        </tr>
                        <tr class="gradeA">
                            <td>Trident</td>
                            <td>Internet Explorer 5.5</td>
                            <td>Win 95+</td>
                            <td>5.5</td>
                            <td>A</td>
                            <td>X</td>
                            <td>X</td>
                            <td><button class="btn btn-primary"><i class="fa fa-eye">&nbsp;view</i></a></td>
                        </tr>
                        <tr class="gradeA">
                            <td>Trident</td>
                            <td>Internet Explorer 6</td>
                            <td>Win 98+</td>
                            <td>6</td>
                            <td>A</td>
                            <td>X</td>
                            <td>X</td>
                            <td><button class="btn btn-primary"><i class="fa fa-eye">&nbsp;view</i></a></td>
                        </tr>
                        <tr class="gradeA">
                            <td>Trident</td>
                            <td>Internet Explorer 7</td>
                            <td>Win XP SP2+</td>
                            <td>7</td>
                            <td>A</td>
                            <td>X</td>
                            <td>X</td>
                            <td><button class="btn btn-primary"><i class="fa fa-eye">&nbsp;view</i></a></td>
                        </tr>
                        <tr class="gradeA">
                            <td>Trident</td>
                            <td>AOL browser (AOL desktop)</td>
                            <td>Win XP</td>
                            <td>6</td>
                            <td>A</td>
                            <td>X</td>
                            <td>X</td>
                            <td><button class="btn btn-primary"><i class="fa fa-eye">&nbsp;view</i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('styles')@endsection
@section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
@endsection