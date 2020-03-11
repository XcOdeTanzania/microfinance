@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Shares
            <small></small>
        </div>
    </div>
    <div class="container-fluid">
        <!-- DATATABLE FOR ACTIVE SHARES -->
        <div class="card">
            <div class="card-header">
                <div class="card-title">Closed Shares</div>
                <!-- <div class="text-sm">
                    When displaying data in a DataTable, it can often be useful to your end users for them to have the ability to obtain the data from the DataTable, extracting it into a file for them
                    to use locally. This can be done with either HTML5 based buttons or Flash buttons.
                </div> -->
            </div>
            <div class="card-body">
                <table class="table table-striped my-4 w-100" id="datatable">
                    <thead>
                        <tr>
                            <th data-priority="1">Account Nbr</th>
                            <th>Client Name</th>
                            <th>Savings Account Number/th>
                            <th class="sort-alpha" data-priority="2">Approved Shares</th>
                            <th class="sort-alpha" data-priority="2">Prodcut Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeX">
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td>4</td>
                            <td>X</td>
                        </tr>
                        <tr class="gradeC">
                            <td>Trident</td>
                            <td>Internet Explorer 5.0</td>
                            <td>Win 95+</td>
                            <td>5</td>
                            <td>C</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Trident</td>
                            <td>Internet Explorer 5.5</td>
                            <td>Win 95+</td>
                            <td>5.5</td>
                            <td>A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Trident</td>
                            <td>Internet Explorer 6</td>
                            <td>Win 98+</td>
                            <td>6</td>
                            <td>A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Trident</td>
                            <td>Internet Explorer 7</td>
                            <td>Win XP SP2+</td>
                            <td>7</td>
                            <td>A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Trident</td>
                            <td>AOL browser (AOL desktop)</td>
                            <td>Win XP</td>
                            <td>6</td>
                            <td>A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 1.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.7</td>
                            <td>A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 1.5</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 2.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td>1.8</td>
                            <td>A</td>
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