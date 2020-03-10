@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
        Pending Approval
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
        </div>


    @endsection
    @section('styles')@endsection
    @section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
    @endsection
