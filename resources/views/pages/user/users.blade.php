@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            Users
            
        </div>
    </div>
    <div class="container-fluid">
        <!-- DATATABLE 1-->
        <div class="card">
            <div class="card-header">
                <div class="card-title">Users</div>
                
            </div>
            <div class="card-body">
                <table class="table table-striped my-4 w-100" id="datatable1">
                    <thead>
                        <tr>
                            <th data-priority="1">Username</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th class="sort-numeric">Roles</th>
                            <th class="sort-alpha" data-priority="2">Office Name</th>
                            <th>Email</th>
                            <th>active</th>
                            <th>Locked</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="user">
                            <td>SamiraM</td>
                            <td>samira</td>
                            <td>Omary</td>
                            <td>Super user</td>
                            <td>Head Office</td>
                            <td>hawa2@qlicue.com</td>
                            <td>Yes</td>
                            <td>No</td>
                            <td><button class="btn btn-labeled btn-info mb-2" type="button">
                        <span class="btn-label"><i class="fa fa-eye"></i></span>
                        view
                    </button></td>
                        </tr>

                        <tr class="user">
                            <td>Robby</td>
                            <td>Robin</td>
                            <td>Chacha</td>
                            <td>admin</td>
                            <td>Head Office</td>
                            <td>robby567@qlicue.com</td>
                            <td>No</td>
                            <td>Yes</td>
                            <td><button class="btn btn-labeled btn-info mb-2" type="button">
                        <span class="btn-label"><i class="fa fa-eye"></i></span>
                        view
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
@endsection
