@extends('layouts.app');

@section('styles')
    
@endsection

@section('content')
    <div class="content-heading">
        <div>Report Schedular</div>
    </div>

    <div class="container-fluid">
        <!-- DATATABLE -->
        <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
                <table class="table table-striped table-bordered my-4 w-100" id="datatable1">
                    <thead>
                        <tr>
                            <th data-priority="1">Name</th>
                            <th>Email Subject</th>
                            <th>Email Message</th>
                            <th>Start Date</th>
                            <th>Email Attachment File Format</th>
                            <th>Active</th>
                        </tr>
                    </thead>
                    <tbody>
                            <td>No results found.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection

{{-- @section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
@endsection --}}