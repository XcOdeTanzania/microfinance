@extends('layouts.app');


@section('styles')
    
@endsection


@section('content')
<div class="content-wrapper">
    <div class="content-heading">
       <div>Savings Reports</div>
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
                            <a href="#">Branch PAR 1-30</a>
                        </td>
                        <td>Loans</td>
                        <td>Gives an overview of the PAR1-30 for a specific branch broken down by Loanofficer</td>
                        <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                    </tr>
                   <tr class="gradeC">
                      <td>
                          <a href="#">Branch Portfolio Per Client Report</a>
                      </td>
                      <td>Loans</td>
                      <td>Branch Portfolio Per Client Report</td>
                      <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>
                   <tr class="gradeC">
                    <td>
                        <a href="#">Branch Portfolio Report</a>
                    </td>
                    <td>Loans</td>
                    <td>Gives an overview of the PAR for a specific branch broken down by Loanofficer</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>

                   <tr class="gradeC">
                    <td>
                        <a href="#">Disbursed Loans Report</a>
                    </td>
                    <td>Loans</td>
                    <td>Returns all loans disbursed within a certain timeperiod with their amounts and basic information</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>
                   
                   <tr class="gradeC">
                    <td>
                        <a href="#">Expected Repayment (Detailed)</a>
                    </td>
                    <td>Loans</td>
                    <td>This report shows the expected repayments vs actual repayments within the specified time period</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>

                   <tr class="gradeC">
                    <td>
                        <a href="#">Expected Repayments</a>
                    </td>
                    <td>Loans</td>
                    <td>This report shows the expected repayments vs actual repayments within the specified time period.</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>

                   <tr class="gradeC">
                    <td>
                        <a href="#">Field Officer Collections Report</a>
                    </td>
                    <td>Loans</td>
                    <td>See all repayments due on a particular day, broken down by group. Designed for loan officers to use in the field.</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>

                   <tr class="gradeC">
                    <td>
                        <a href="#">Institution Arrears Report</a>
                    </td>
                    <td>Loans</td>
                    <td>This report lists all loans in arrears in the entire institution or a specific branch</td>
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