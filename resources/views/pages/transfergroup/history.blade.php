@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
        History
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


    @endsection
    @section('styles')@endsection
    @section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
    @endsection
