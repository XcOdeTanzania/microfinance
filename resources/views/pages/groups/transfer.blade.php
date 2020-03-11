<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 11-Mar-20
 * Time: 01:29
 */
?>

@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Transfer Group
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title"></div>
            <div class="text-sm"></div>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="staff-pending-approval-tab" data-toggle="tab" href="#staff-pending-approval" role="tab" aria-controls="staff-pending-approval" aria-selected="true">Staff Pending Approval</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="group-pending-approval-tab" data-toggle="tab" href="#group-pending-approval" role="tab" aria-controls="group-pending-approval" aria-selected="false">Group Pending Approval</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">History</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="staff-pending-approval" role="tabpanel" aria-labelledby="staff-pending-approval-tab">
                    <table class="table table-striped my-4 w-100" id="datatable1">
                        <thead>
                        <tr>

                            <th>Group Name</th>
                            <th>Submitted On</th>
                            <th>Destination Office</th>
                            <th>Destination Group</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="Received">
                            <td></td>
                            <td></td>
                            <td>No data available in table</td>
                            <td></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="group-pending-approval" role="tabpanel" aria-labelledby="group-pending-approval-tab">
                    <table class="table table-striped my-4 w-100" id="datatable1">
                        <thead>
                        <tr>

                            <th>Group Name</th>
                            <th>Submitted On</th>
                            <th>Destination Office</th>
                            <th>Destination Group</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="Received">
                            <td></td>
                            <td></td>
                            <td>No data available in table</td>
                            <td></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                    <table class="table table-striped my-4 w-100" id="datatable1">
                        <thead>
                        <tr>
                            <th data-priority="1">Approved On</th>
                            <th>Group Name</th>
                            <th>Transfer from Office</th>
                            <th>Transfer To Office</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr class="Received">
                            <td>No results found.</td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>


@endsection
@section('styles')@endsection
@section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
@endsection

