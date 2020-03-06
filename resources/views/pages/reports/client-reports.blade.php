@extends('layouts.app');


@section('styles')
    
@endsection


@section('content')
<div class="content-wrapper">
    <div class="content-heading">
       <div>Client Reports</div>
    </div>
    <div class="container-fluid">
       <!-- DATATABLE -->
       <div class="card">
          <div class="card-header"><br>
          <div class="card-body">
             <table class="table table-striped my-4 w-100" id="datatable1">
                <thead>
                   <tr>
                      <th data-priority="1">Name</th>
                      <th>Category</th>
                      <th>Description</th>
                      <th></th>
                   </tr>
                </thead>
                <tbody> 
                    <tr class="gradeC">
                        <td>
                            <a href="#">Client Report</a>
                        </td>
                        <td>Client</td>
                        <td>The client report lists all loans and savings accounts of the client.</td>
                        <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                    </tr>
                   <tr class="gradeC">
                      <td>
                          <a href="#">Branch Client Numbers</a>
                      </td>
                      <td>Client</td>
                      <td>Breaks down the clients in the system into different bands</td>
                      <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>
                   <tr class="gradeC">
                    <td>
                        <a href="#">Client Numbers Report</a>
                    </td>
                    <td>Client</td>
                    <td>This report shows all loan and savings information for any client within a particular branch, similar to the Group report, but for an entire branch</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>
                   <tr class="gradeC">
                    <td>
                        <a href="#">Client Report</a>
                    </td>
                    <td>Client</td>
                    <td>The client report lists all loans and savings accounts of the client.</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>
                   
                </tbody>
             </table>
          </div>
      
       </div>
       </div>
    </div>
</div>

@endsection

@section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
@endsection