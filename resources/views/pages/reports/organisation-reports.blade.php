@extends('layouts.app')

@section('content')
    <div class="content-heading">
       <div>Organisation Reports</div>
    </div>
    
    <div class="container-fluid">
      <!-- DATATABLE DEMO 3-->
      <div class="card">
        <!--<div class="card-header">
           <div class="card-title">Key Table</div>
           <div class="text-sm">KeyTable allows you to use keyboard navigation on a DataTables enhanced table, like an Excel spreadsheet.</div>
        </div> -->
        <div class="card-body">
           <table class="table table-striped my-4 w-100" id="datatable3">
              <thead>
                 <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th></th>
                 </tr>
              </thead>
              <tbody>
                 <tr>
                    <td>
                       <a href="#">Audit Report</a>
                    </td>
                    <td>
                       Organisation
                    </td>
                    <td>
                        Audit report enabling you to pull out all system actions within a set timeframe
                    </td>
                    <td>
                       <a href="#" class="btn btn-primary">
                          <i class="fas fa-file"></i>
                       </a>
                    </td>
                 </tr>
                 <tr>
                    <td>
                       <a href="#">Indicator Report (Group Accounts)</a>
                    </td>
                    <td>
                       Organisation
                    </td>
                    <td>
                        This report shows key indicators on all accounts linked to groups on a monthly basis for the last four months.
                    </td>
                    <td>
                       <a href="#" class="btn btn-primary">
                          <i class="fas fa-file"></i>
                       </a>
                    </td>
                 </tr>
                 <tr>
                    <td>
                       <a href="#">Indicator Report (Individual Accounts)</a>
                    </td>
                    <td>
                       Organisation
                    </td>
                    <td>
                        This report shows key indicators on all accounts linked to individuals on a monthly basis for the last four months.
                    </td>
                    <td>
                       <a href="#" class="btn btn-primary">
                          <i class="fas fa-file"></i>
                       </a>
                    </td>
                 </tr>
                 <tr>
                    <td>
                       <a href="#">Loan Officer Performance Report</a>
                    </td>
                    <td>
                       Organisation
                    </td>
                    <td>
                        Shows the performance of each loan officer in an organisation.
                    </td>
                    <td>
                       <a href="#" class="btn btn-primary">
                          <i class="fas fa-file"></i>
                       </a>
                    </td>
                 </tr>
                 <tr>
                    <td>
                       <a href="#">PPI Kenya 2005 Report</a>
                    </td>
                    <td>
                       Organisation
                    </td>
                    <td>
                        Report shows all the PPI answers per question, and associated points, for the most recent PPI survey carried out for each client
                    </td>
                    <td>
                       <a href="#" class="btn btn-primary">
                          <i class="fas fa-file"></i>
                       </a>
                    </td>
                 </tr>
                 <tr>
                    <td>
                       <a href="#">PPI Malawi Responses Report</a>
                    </td>
                    <td>
                       Organisation
                    </td>
                    <td>
                        Report shows all the PPI answers per question, and associated points, for the most recent PPI survey carried out for each client
                    </td>
                    <td>
                       <a href="#" class="btn btn-primary">
                          <i class="fas fa-file"></i>
                       </a>
                    </td>
                 </tr>
              </tbody>
           </table>
        </div>
     </div>
   </div>
@endsection

@section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
@endsection