@extends('layouts.app')

@section('content')
    <div class="content-heading">
       <div>Financial Reports</div>
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
                       <a href="#">Accrued Interest in Period</a>
                    </td>
                    <td>
                       Financial
                    </td>
                    <td>
                        This report lists all interest accrued on loans within the specified time period
                    </td>
                    <td>
                       <a href="#" class="btn btn-primary">
                          <i class="fas fa-file"></i>
                       </a>
                    </td>
                 </tr>
                 <tr>
                    <td>
                       <a href="#">Balance Sheet</a>
                    </td>
                    <td>
                       Financial
                    </td>
                    <td>
                        Balance Sheet
                    </td>
                    <td>
                       <a href="#" class="btn btn-primary">
                          <i class="fas fa-file"></i>
                       </a>
                    </td>
                 </tr>
                 <tr>
                    <td>
                       <a href="#">Accrued Interest Report</a>
                    </td>
                    <td>
                       Financial
                    </td>
                    <td>
                        This report lists all interest accrued on loans disbursed within the specified time period
                    </td>
                    <td>
                       <a href="#" class="btn btn-primary">
                          <i class="fas fa-file"></i>
                       </a>
                    </td>
                 </tr>
                 <tr>
                    <td>
                       <a href="#">Cashflow</a>
                    </td>
                    <td>
                       Financial
                    </td>
                    <td>
                        Overview of the cashflow in a given account
                    </td>
                    <td>
                       <a href="#" class="btn btn-primary">
                          <i class="fas fa-file"></i>
                       </a>
                    </td>
                 </tr>
                 <tr>
                    <td>
                       <a href="#">Daily Trial Balance</a>
                    </td>
                    <td>
                       Financial
                    </td>
                    <td>
                        Trial Balance Report
                    </td>
                    <td>
                       <a href="#" class="btn btn-primary">
                          <i class="fas fa-file"></i>
                       </a>
                    </td>
                 </tr>
                 <tr>
                    <td>
                       <a href="#">Historical Income Statement</a>
                    </td>
                    <td>
                       Financial
                    </td>
                    <td>
                        This report shows the historical income and expenses broken down per month for the last six months
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