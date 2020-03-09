@extends('layouts.app');

@section('styles')
    
@endsection

@section('content')

    <div class="content-heading">
        <div>Data Exports</div>
    </div>

    <div class="container-fluid">
        <!-- DATATABLE -->
        <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
                <table class="table table-striped table-bordered my-4 w-100" id="datatable1">
                    <thead>
                        <tr>
                            <th data-priority="1">Id</th>
                            <th>Name</th>
                            <th>Base Entity</th>
                            <th>Created By</th>
                            <th>Created On Date</th>
                            <th>Download Counter</th>
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