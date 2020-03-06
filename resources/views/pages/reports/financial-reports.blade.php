@extends('layouts.app');


@section('styles')
    
@endsection


@section('content')
    <div class="content-heading">
       <div>Financial Reports</div>
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
                            <a href="#">Accrued Interest in Period</a>
                        </td>
                        <td>Financial</td>
                        <td>This report lists all interest accrued on loans within the specified time period</td>
                        <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                    </tr>
                   <tr class="gradeC">
                      <td>
                          <a href="#">Accrued Interest Report</a>
                      </td>
                      <td>Financial</td>
                      <td>This report lists all interest accrued on loans disbursed within the specified time period</td>
                      <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>

                   <tr class="gradeC">
                    <td>
                        <a href="#">Balance Sheet</a>
                    </td>
                    <td>Financial</td>
                    <td>Balance Sheet.</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>

                   <tr class="gradeC">
                    <td>
                        <a href="#">Cashflow</a>
                    </td>
                    <td>Financial</td>
                    <td>Overview of the cashflow in a given account</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>
                   
                   <tr class="gradeC">
                    <td>
                        <a href="#">Daily Trial Balance</a>
                    </td>
                    <td>Financial</td>
                    <td>Trial Balance Report</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>

                   <tr class="gradeC">
                    <td>
                        <a href="#">Historical Income Statement</a>
                    </td>
                    <td>Financial</td>
                    <td>This report shows the historical income and expenses broken down per month for the last six months</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>

                   <tr class="gradeC">
                    <td>
                        <a href="#">Journals Report</a>
                    </td>
                    <td>Financial</td>
                    <td>Report shows all Journal bookings</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>

                   <tr class="gradeC">
                    <td>
                        <a href="#">Ledger Report</a>
                    </td>
                    <td>Financial</td>
                    <td>Report shows all Journal bookings for specified account</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>

                </tbody>
             </table>
          </div>
      
       </div>
       </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
@endsection