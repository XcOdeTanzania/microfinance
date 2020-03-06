@extends('layouts.app');


@section('styles')
    
@endsection


@section('content')
<div class="content-wrapper">
    <div class="content-heading">
       <div>Organisation Reports</div>
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
                            <a href="#">Audit Report</a>
                        </td>
                        <td>Organisation</td>
                        <td>Audit report enabling you to pull out all system actions within a set timeframe</td>
                        <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                    </tr>
                   <tr class="gradeC">
                      <td>
                          <a href="#">Indicator Report (Group Accounts)</a>
                      </td>
                      <td>Organisation</td>
                      <td>This report shows key indicators on all accounts linked to groups on a monthly basis for the last four months.</td>
                      <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>
                   <tr class="gradeC">
                    <td>
                        <a href="#">Indicator Report (Individual Accounts)</a>
                    </td>
                    <td>Organisation</td>
                    <td>This report shows key indicators on all accounts linked to individuals on a monthly basis for the last four months.</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>

                   <tr class="gradeC">
                    <td>
                        <a href="#">Loan Officer Performance Report</a>
                    </td>
                    <td>Organisation</td>
                    <td>Shows the performance of each loan officer in an organisation.</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>
                   
                   <tr class="gradeC">
                    <td>
                        <a href="#">PPI Kenya 2005 Report</a>
                    </td>
                    <td>Organisation</td>
                    <td>Report shows all the PPI answers per question, and associated points, for the most recent PPI survey carried out for each client.</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>

                   <tr class="gradeC">
                    <td>
                        <a href="#">PPI Malawi Responses Report</a>
                    </td>
                    <td>Organisation</td>
                    <td>Report shows all the PPI answers per question, and associated points, for the most recent PPI survey carried out for each client.</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>

                   <tr class="gradeC">
                    <td>
                        <a href="#">PPI Tanzania 2012 Report</a>
                    </td>
                    <td>Organisation</td>
                    <td>Report shows all the PPI answers per question, and associated points, for the most recent PPI survey carried out for each client.</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>

                   <tr class="gradeC">
                    <td>
                        <a href="#">PPI Uganda 2009 Report</a>
                    </td>
                    <td>Organisation</td>
                    <td>Report shows all the PPI answers per question, and associated points, for the most recent PPI survey carried out for each client.</td>
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