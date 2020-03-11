<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 11-Mar-20
 * Time: 01:28
 */
?>

@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Active
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
                    <a class="nav-link active" id="active-tab" data-toggle="tab" href="#active" role="tab" aria-controls="active" aria-selected="true">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pending-centers-tab" data-toggle="tab" href="#pending-centers" role="tab" aria-controls="pending-centers" aria-selected="false"> Pending Centers </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="closed-groups-tab" data-toggle="tab" href="#closed-groups" role="tab" aria-controls="closed-groups" aria-selected="false">Closed Groups</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="active" role="tabpanel" aria-labelledby="active-tab">
                    <table class="table table-striped my-4 w-100" id="datatable1">
                        <thead>
                        <tr>
                            <th data-priority="1">Registration Number</th>
                            <th>Centre Name</th>
                            <th>Branch</th>
                            <th>Loan Ofiicer</th>
                            <th>View</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="Received">
                            <td></td>
                            <td></td>
                            <td>No results found.</td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pending-centers" role="tabpanel" aria-labelledby="pending-centers-tab">
                    <table class="table table-striped my-4 w-100" id="datatable1">
                        <thead>
                        <tr>
                            <th data-priority="1">Registration Number</th>
                            <th>Centre Name</th>
                            <th>Branch</th>
                            <th>Loan Ofiicer</th>
                            <th>View</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="Received">
                            <td></td>
                            <td></td>
                            <td>No results found.</td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="closed-groups" role="tabpanel" aria-labelledby="closed-groups-tab">
                    <table class="table table-striped my-4 w-100" id="datatable1">
                        <thead>
                        <tr>
                            <th data-priority="1">Registration Number</th>
                            <th>Centre Name</th>
                            <th>Branch</th>
                            <th>Loan Ofiicer</th>
                            <th>View</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="Received">
                            <td></td>
                            <td></td>
                            <td>No results found.</td>
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


