@extends('layouts.app');


@section('styles')
    
@endsection


@section('content')
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
                            <a href="#">All Savings Transactions</a>
                        </td>
                        <td>Savings</td>
                        <td>This report shows individual deposits and withdrawals from savings within the specified time period.</td>
                        <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                    </tr>
                   <tr class="gradeC">
                      <td>
                          <a href="#">Fixed Term Deposit Accounts Overview</a>
                      </td>
                      <td>Savings</td>
                      <td>This report shows individual deposits and withdrawals from savings within the specified time period.</td>
                      <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>
                   <tr class="gradeC">
                    <td>
                        <a href="#">Fixed Term Maturity Report</a>
                    </td>
                    <td>Savings</td>
                    <td>This report shows individual deposits and withdrawals from savings within the specified time period.</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>

                   <tr class="gradeC">
                    <td>
                        <a href="#">Savings Accounts Report</a>
                    </td>
                    <td>Savings</td>
                    <td>This report shows individual deposits and withdrawals from savings within the specified time period.</td>
                    <td><button type="btn" class="btn btn-primary"><span class="fas fa-file"></span></button></td>
                   </tr>
                   
                   <tr class="gradeC">
                    <td>
                        <a href="#">Savings Balances</a>
                    </td>
                    <td>Savings</td>
                    <td>This report shows individual deposits and withdrawals from savings within the specified time period.</td>
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