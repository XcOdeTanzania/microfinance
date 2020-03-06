@extends('layouts.app');


@section('styles')
    
@endsection


@section('content')
<div class="content-wrapper">
    <div class="content-heading">
       <div>Group Reports</div>
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
                            <a href="#">Group Breakdown</a>
                        </td>
                        <td>Group</td>
                        <td>Provides a breakdown of the groups of each loanofficer into gender, average loansize and PAR</td>
                        <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                    </tr>
                   <tr class="gradeC">
                      <td>
                          <a href="#">Group Report</a>
                      </td>
                      <td>Group</td>
                      <td>This report will show all members of the group and their current loan status.</td>
                      <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>
                   <tr class="gradeC">
                    <td>
                        <a href="#">Loanofficer Groups Report</a>
                    </td>
                    <td>Group</td>
                    <td>This report returns all groups reports for a specific loanofficer.</td>
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