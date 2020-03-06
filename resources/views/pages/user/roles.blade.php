@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
            User Roles

        </div>
    </div>
    <div class="container-fluid">
        <!-- DATATABLE 1-->
        <div class="card">
            <div class="card-header">
                <div class="card-title">User Roles</div>
                
            </div>
            <div class="card-body">
                <table class="table table-striped my-4 w-100" id="datatable1">
                    <thead>
                        <tr>
                            <th data-priority="1">Name</th>
                            <th>Description</th>
                            <th>Active</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="User Roles">
                            <td>Hawa</td>
                            <td>Branch Manager</td>
                            <td><i class="fa fa-check"></i></td>
                        
                        
                            
                            <td><button class="btn btn-labeled btn-info mb-2" type="button">
                        <span class="btn-label"><i class="fa fa-eye"></i></span>
                        view
                    </button></td>
                        </tr>

                        <tr class="user">
                            <td>Credit Officer</td>
                            <td>Credit Officer</td>
                            <td><i class="fa fa-check"></i></td>
                            
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
