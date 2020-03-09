@extends('layouts.app')
@section('content')

<div class="content-heading">
        <div>
            My Actions
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
                            <th>Entity</th>
                            <th>Performed by</th>
                            <th>Office name</th>
                            <th>Name</th>
                            <th>Group</th>
                            <th>Amount</th>
                            <th>Created date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="Received">
                            <td>CREATED</td>
                            <td>ACCOUNT TRANSFER</td>
                            <td>CASHIER</td>
                            <td>Sub Branch 1</td>
                            <td>Jane Doe</td>
                            <td>WAMWA</td>
                            <td>500000</td>
                            <td>03/01/2019</td>
                        </tr>
                        <tr class="Received">
                            <td>CREATED</td>
                            <td>ACCOUNT TRANSFER</td>
                            <td>CASHIER</td>
                            <td>Sub Branch 2</td>
                            <td>John Joseph</td>
                            <td>BLESSED</td>
                            <td>50000</td>
                            <td>08/01/2019</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    @endsection
    @section('styles')@endsection
    @section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
    <script src="{{ asset('angle/js/forms.js') }}"></script>
    <script src="{{ asset('angle/js/select2.js') }}"></script>      