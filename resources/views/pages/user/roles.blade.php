@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Users
            <small></small>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Users</div>
        <div class="card-body">
            <div class="table-responsive bootgrid">
                <table class="table table-striped" id="bootgrid-basic">
                    <thead>
                        <tr>
                            <th data-column-id="userName">User Name</th>
                            <th data-column-id="firstName">First Name</th>
                            <th data-column-id="lastName" data-order="desc">Last Name</th>
                            <th data-column-id="roles" data-order="desc">Roles</th>
                            <th data-column-id="officeName" data-order="desc">OfficeName</th>
                            <th data-column-id="email" data-order="desc">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>HawaAlly</td>
                            <td>Hawa</td>
                            <td>Last name</td>
                            <td>admin</td>
                            <td>gogo</td>
                            <td>tes@gmal.com</td>
                        </tr>
                        <tr>
                            <td>HawaAlly</td>
                            <td>Hawa</td>
                            <td>Last name</td>
                            <td>admin</td>
                            <td>gogo</td>
                            <td>tes@gmal.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   
   
@endsection
@section('styles')@endsection
@section('scripts')
    <script src="{{ asset('angle/js/bootgrid.js') }}"></script>
@endsection
