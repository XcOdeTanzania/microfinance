@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Journal Templates
        </div>
    </div>
    <div class="card">
            <div class="card-header">
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
    @endsection
