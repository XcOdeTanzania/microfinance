<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 06-Mar-20
 * Time: 14:33
 */?>

@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Pending Approval
            <small></small>
        </div>
    </div>
    <div class="container-fluid">
        <!-- DATATABLE DEMO 1-->
        <div class="card">
            <div class="card-header">
                <div class="card-title"></div>
                <div class="text-sm"></div>
            </div>
            <div class="card-body">
                <table class="table table-striped my-4 w-100" id="pendingApproval">
                    <thead>
                    <tr>
                        <th data-priority="1">Client Id</th>
                        <th >Display Name</th>
                        <th>Group Name</th>
                        <th>Branch</th>
                        <th>Loan Officer</th>
                        <th>Registration Date</th>
                        <th>Action </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr >
                        <td>CL-002-2020</td>
                        <td>John Joseph</td>
                        <td>Alpha 1</td>
                        <td> M-City </td>
                        <td>Mr. JPM</td>
                        <td>20/01/2020</td>
                        <td>
                            <button class="btn btn-sm btn-primary ">
                                <i class="fas fa-eye"></i>
                                View
                            </button></td>
                    </tr>

                    <tr >
                        <td>CL-002-2020</td>
                        <td>Ramadhan Athumani</td>
                        <td>individual</td>
                        <td> M-City </td>
                        <td>Mr. JPM</td>
                        <td>20/01/2020</td>
                        <td>
                            <button class="btn btn-sm btn-primary ">
                                <i class="fas fa-eye"></i>
                                View
                            </button></td>
                    </tr>
                    <tr >
                        <td>CL-005-2020</td>
                        <td> Joseph John</td>
                        <td>individual</td>
                        <td> M-City </td>
                        <td>Mr. X</td>
                        <td>20/01/2020</td>
                        <td>
                            <button class="btn btn-sm btn-primary ">
                                <i class="fas fa-eye"></i>
                                View
                            </button></td>
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
    <script>
        $('#pendingApproval').DataTable({
            'paging': true,
            // Table pagination
            'ordering': true,
            // Column ordering
            'info': true,
            // Bottom left status text
            responsive: true,
            // Text translation options
            // Note the required keywords between underscores (e.g _MENU_)
            oLanguage: {
                sSearch: 'Search all columns:',
                sLengthMenu: '_MENU_ records per page',
                info: 'Showing page _PAGE_ of _PAGES_',
                zeroRecords: 'Nothing found - sorry',
                infoEmpty: 'No records available',
                infoFiltered: '(filtered from _MAX_ total records)',
                oPaginate: {
                    sNext: '<em class="fa fa-caret-right"></em>',
                    sPrevious: '<em class="fa fa-caret-left"></em>'
                }
            },
            // Datatable Buttons setup
            dom: 'Bfrtip',
            buttons: [{
                extend: 'copy',
                className: 'btn-info'
            }, {
                extend: 'csv',
                className: 'btn-info'
            }, {
                extend: 'excel',
                className: 'btn-info',
                title: 'XLS-File'
            }, {
                extend: 'pdf',
                className: 'btn-info',
                title: 'PDF'//$('title').text()
            }, {
                extend: 'print',
                className: 'btn-info'
            }]
        });
    </script>
@endsection