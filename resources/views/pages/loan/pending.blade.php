@extends('layouts.app');

@section('content') 
    <div class="content-heading">
        <div>0000000{{ $id }} &dash; Declining &dash; Accrual</div>
    </div>
    <div class="container-fluid">
        {{-- status and buttons --}}
         <div class="row">
            <div class="col-6">
                <label style="float:left; width: 140px; text-align: right;" for="loan_status">Status</label>
                <div style="margin-left: 160px">
                    <span class="badge badge-warning">Submitted and pending approval</span>
                </div>
            </div>
            <div class="col-6">
                <div class="btn-group" role="group" aria-label="button group">
                    <a href="">
                        <button class="btn btn-success" type="button">
                            <i class="fas fa-check"></i>
                            &nbsp;Approve
                        </button>
                    </a>
                    <a href="">
                        <button class="btn btn-danger" type="button">
                            <i class="fas fa-times"></i>
                            &nbsp;Reject
                        </button>
                    </a>
                    <div class="dropdown show">
                        <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown link
                        </a>
                      
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#">
                              <i class="fas fa-times"></i>
                              &nbsp;Withdraw
                          </a>
                          <a class="dropdown-item" href="#">
                              <i class="fas fa-edit"></i>
                              &nbsp;Edit
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="fas fa-edit"></i>
                            &nbsp;Adjust Repayment Schedule
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-download"></i>
                            &nbsp;Download As PDF
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-book"></i>
                            &nbsp;Documents
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-eye"></i>
                            &nbsp;Preview Schedule
                        </a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        {{-- status and buttons --}}

        {{-- cards --}}
        <div class="card">
            <div class="card-header">
                Credit Checks
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Message</th>
                            <th>Result</th>
                            <th>Pass/Fail?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>No results found</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- cards --}}



        {{-- client information card start --}}
        <div class="card card-default" id="cardDemo1">
            <div class="card-header">Client Information<a class="float-right" href="#" data-tool="card-collapse" data-toggle="tooltip" title="Collapse Card"><em class="fa fa-minus"></em></a></div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="control-group">
                            <label style="float: left;">
                                <strong>Client</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <a href="">John Winston Drake (0002-0001-0002)</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label style="float: left">
                            <strong>Phone Number</strong>
                        </label>
                        <div class="controls" style="margin-left: 100px">
                            <span>0774657392</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="control-group">
                            <label style="float: left; text-align: right">
                                <strong>Activation Date</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span>14-10-2000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label style="float: left">
                            <strong>Address</strong>
                        </label>
                        <div class="controls" style="margin-left: 100px">
                            <span>657480-00100</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="control-group">
                            <label style="float: left; text-align: right">
                                <strong>Branch Name</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span>Sub Branch 1</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label style="float: left">
                            <strong>Date Of Birth</strong>
                        </label>
                        <div class="controls" style="margin-left: 100px">
                            <span>12-06-1990</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="control-group">
                            <label style="float: left; text-align: right">
                                <strong>Loan Officer</strong>
                            </label>
                            {{-- <div class="controls" style="margin-left: 100px">
                                <span>Sub Branch 1</span>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>
            <div class="card-wrapper">
               <div class="card-body">
                  <div class="collapseOne" style="border: 2px; border-top-style: dashed;">
                    <div class="businessInfo"  style="margin-top:10px">
                        <div>
                            <h3>Business Information</h3>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Start Date</th>
                                    <th>Type</th>
                                    <th>Address</th>
                                    <th>City</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Doe enterprises</td>
                                    <td>01-02-2018</td>
                                    <td>9012345364</td>
                                    <td>475869</td>
                                    <td>Nairobi</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="nextofkininfo" style="margin-top:10px">
                        <div>
                            <h3>Next Of Kin</h3>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>D.O.B</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>City</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jane Doe</td>
                                    <td>01-02-2018</td>
                                    <td>077384729</td>
                                    <td>475869</td>
                                    <td>Nairobi</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
               </div>
            </div>
         </div>
        {{-- client information card ends --}}
    </div>
@endsection
       


         {{-- group information card starts --}}
        <!-- <div class="card card-default" id="cardDemo2">
            <div class="card-header">Group Information<a class="float-right" href="#" data-tool="card-collapse" data-toggle="tooltip" title="Collapse Card"><em class="fa fa-minus"></em></a></div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="control-group">
                            <label style="float: left;">
                                <strong>Group</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span>Blessed</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label style="float: left">
                            <strong>Chairman</strong>
                        </label>
                        <div class="controls" style="margin-left: 100px">
                            
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="control-group">
                            <label style="float: left; text-align: right">
                                <strong>Members</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span>3 Members</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label style="float: left">
                            <strong>Group Meetings</strong>
                        </label>
                        <div class="controls" style="margin-left: 100px">
                            <span>mukono</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="control-group">
                            <label style="float: left; text-align: right">
                                <strong>Exposure</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span>5 Active Loans, 10, 051, 159.21 $</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        
                    </div>
                </div>
            </div>
            <div class="card-wrapper">
               <div class="card-body">
                  <div class="collapseOne" style="border: 2px; border-top-style: dashed;">
                    <div class="groupmembers"  style="margin-top:10px">
                        <div>
                            <h3>Group Members</h3>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Loan Amount</th>
                                    <th>Outstanding</th>
                                    <th>Arrears</th>
                                    <th>Comp.Savings</th>
                                    <th>Vol.Savings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Winston Drake</td>
                                    <td>500.00</td>
                                    <td>339.40</td>
                                    <td class="text-success">-106.00</td>
                                    <td>0</td>
                                    <td>940</td>
                                </tr>
                                <tr>
                                    <td>John Winston Drake</td>
                                    <td>500.00</td>
                                    <td>339.40</td>
                                    <td class="text-success">-106.00</td>
                                    <td>0</td>
                                    <td>940</td>
                                </tr>
                                <tr>
                                    <td>John Winston Drake</td>
                                    <td>500.00</td>
                                    <td>339.40</td>
                                    <td class="text-success">-106.00</td>
                                    <td>0</td>
                                    <td>940</td>
                                </tr>
                                <tr>
                                    <td>John Winston Drake</td>
                                    <td>500.00</td>
                                    <td>339.40</td>
                                    <td class="text-success">-106.00</td>
                                    <td>0</td>
                                    <td>940</td>
                                </tr>
                                <tr>
                                    <td>John Winston Drake</td>
                                    <td>500.00</td>
                                    <td>339.40</td>
                                    <td class="text-success">-106.00</td>
                                    <td>0</td>
                                    <td>940</td>
                                </tr>
                                <tfoot>
                                    <tr>
                                        <td>Total</td>
                                        <td>51,700.00</td>
                                        <td>10,051,159.21</td>
                                        <td>-2389.00</td>
                                        <td>0.00</td>
                                        <td>95,940.00</td>
                                    </tr>
                                </tfoot>
                            </tbody>
                        </table>
                    </div>

                    <div class="groupmemberallocation" style="margin-top:10px">
                        <div>
                            <h3>Group Member Allocation</h3>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Account Nr</th>
                                    <th>Client</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <tr>
                                    <td>Jane Doe</td>
                                    <td>01-02-2018</td>
                                    <td>077384729</td>
                                    <td>475869</td>
                                    <td>Nairobi</td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         {{-- group information card ends --}}

         {{-- Account History card starts --}}
         <div class="card card-default" id="cardDemo3">
            <div class="card-header">Account History<a class="float-right" href="#" data-tool="card-collapse" data-toggle="tooltip" title="Collapse Card"><em class="fa fa-minus"></em></a></div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="control-group">
                            <label style="float: left;">
                                <strong>Loans</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                {{-- <span>Blessed</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label style="float: left">
                            <strong>Savings</strong>
                        </label>
                        <div class="controls" style="margin-left: 100px">
                            
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="control-group">
                            <label style="float: left; text-align: right">
                                <strong>Out.Balance </strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span>10,040,158.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label style="float: left">
                            <strong>Total Balance</strong>
                        </label>
                        <div class="controls" style="margin-left: 100px">
                            <span>940.00</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="control-group">
                            <label style="float: left; text-align: right">
                                <strong>Loan Cycle</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span>6</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="control-group">
                            <label style="float: left; text-align: right">
                                <strong>Timely Repayments</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span>88 %</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        
                    </div>
                </div>
            </div>
            <div class="card-wrapper">
               <div class="card-body">
                  <div class="collapseOne" style="border: 2px; border-top-style: dashed;">
                    <div class="loans"  style="margin-top:10px">
                        <div>
                            <h3>Loans</h3>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Account No</th>
                                    <th>Product</th>
                                    <th>Outstanding</th>
                                    <th>TRP</th>
                                    <th>Disburse Date</th>
                                    <th>Latest Activity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>000000030</td>
                                    <td>Mobile Loan Declining - Accrual</td>
                                    <td>339.40</td>
                                    <td>50 %</td>
                                    <td>18-12-2019</td>
                                    <td></td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>000000030</td>
                                    <td>Mobile Loan Declining - Accrual</td>
                                    <td>339.40</td>
                                    <td>50 %</td>
                                    <td>18-12-2019</td>
                                    <td></td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>000000030</td>
                                    <td>Mobile Loan Declining - Accrual</td>
                                    <td>339.40</td>
                                    <td>50 %</td>
                                    <td>18-12-2019</td>
                                    <td></td>
                                    <td>Active</td>
                                </tr>
                                <tfoot>
                                    <tr>
                                        <td>Total</td>
                                        <td>51,700.00</td>
                                        <td>10,051,159.21</td>
                                        <td>88%</td>
                                        <td>18-12-2019</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </tbody>
                        </table>
                    </div>

                    <div class="savings" style="margin-top:10px">
                        <div>
                            <h3>Savings</h3>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Account No</th>
                                    <th>Product</th>
                                    <th>Outstanding</th>
                                    <th>Latest Activity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                               <tr>
                                   <td>00000002</td>
                                   <td>Savings Product - No Accounting/Interest</td>
                                   <td>940</td>
                                   <td></td>
                                   <td>Active</td>
                               </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Total</td>
                                    <td></td>
                                    <td>940.00</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         {{-- Account History card ends --}}
    </div>-->