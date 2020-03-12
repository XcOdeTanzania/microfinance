@extends('layouts.app')

@section('content')
    <div class="content-heading">
       <div>Loans Reports</div>
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
                       <a href="#">Branch PAR 1-30</a>
                    </td>
                    <td>
                       Loans
                    </td>
                    <td>
                        Gives an overview of the PAR1-30 for a specific branch broken down by Loanofficer
                    </td>
                    <td>
                       <a href="#" class="btn btn-primary">
                          <i class="fas fa-file"></i>
                       </a>
                    </td>
                 </tr>
                 <tr>
                    <td>
                       <a href="#">Branch Portfolio Per Client Report</a>
                    </td>
                    <td>
                       Loans
                    </td>
                    <td>
                        Branch Portfolio Per Client Report
                    </td>
                    <td>
                       <a href="#" class="btn btn-primary">
                          <i class="fas fa-file"></i>
                       </a>
                    </td>
                 </tr>
                 <tr>
                    <td>
                       <a href="#">Branch Portfolio Report</a>
                    </td>
                    <td>
                       Loans
                    </td>
                    <td>
                        Gives an overview of the PAR for a specific branch broken down by Loanofficer
                    </td>
                    <td>
                       <a href="#" class="btn btn-primary">
                          <i class="fas fa-file"></i>
                       </a>
                    </td>
                 </tr>
                 <tr>
                    <td>
                       <a href="#">Disbursed Loans Report</a>
                    </td>
                    <td>
                       Loans
                    </td>
                    <td>
                        Returns all loans disbursed within a certain timeperiod with their amounts and basic information
                    </td>
                    <td>
                       <a href="#" class="btn btn-primary">
                          <i class="fas fa-file"></i>
                       </a>
                    </td>
                 </tr>
                 <tr>
                    <td>
                       <a href="#">Expected Repayment (Detailed)</a>
                    </td>
                    <td>
                       Loans
                    </td>
                    <td>
                        Gives an overview of the PAR for a specific branch broken down by Loanofficer
                    </td>
                    <td>
                       <a href="#" class="btn btn-primary">
                          <i class="fas fa-file"></i>
                       </a>
                    </td>
                 </tr>
                 <tr>
                    <td>
                       <a href="#">Expected Repayments</a>
                    </td>
                    <td>
                       Loans
                    </td>
                    <td>
                        Gives an overview of the PAR for a specific branch broken down by Loanofficer
                    </td>
                    <td>
                       <a href="#" class="btn btn-primary">
                          <i class="fas fa-file"></i>
                       </a>
                    </td>
                 </tr>
                 <tr>
                    <td>
                       <a href="#">Field Officer Collections Report</a>
                    </td>
                    <td>
                       Loans
                    </td>
                    <td>
                        Gives an overview of the PAR for a specific branch broken down by Loanofficer
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