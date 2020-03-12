@extends('layouts.app')

@section('content') 
    <div class="content-heading">
        <div>0000000{{ $id }} &dash; Declining &dash; Accrual</div>
    </div>
    <div class="container-fluid">
        <!-- status and buttons -->
        <div class="row my-3">
            <div class="col-6">
                <label style="float:left; width: 140px; text-align: right;" for="loan_status">Status</label>
                <div style="margin-left: 160px">
                    <span class="badge badge-warning">Submitted and pending approval</span>
                </div>
            </div>
            <div class="col-6">
                <div class="btn-group" role="group" aria-label="button group">
                    <a href="#" class="m-1">
                        <button class="btn btn-success" type="button">
                            <i class="fas fa-check"></i>
                            &nbsp;Approve
                        </button>
                    </a>
                    <a href="#" class="m-1">
                        <button class="btn btn-danger" type="button">
                            <i class="fas fa-times"></i>
                            &nbsp;Reject
                        </button>
                    </a>
                    <div class="dropdown show">
                        <a class="btn btn-light dropdown-toggle m-1" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <!-- status and buttons -->

        <!-- credit checks card start -->
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Credit Checks
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped my-4 w-100">
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
        <!-- credit checks card end -->



        <!-- client information card start -->
        <div class="card card-default" id="cardDemo1">
            <div class="card-header">
                <div class="card-title">Client Information</div>
                <a class="float-right" href="#" data-tool="card-collapse" data-toggle="tooltip" title="Collapse Card">
                    <em class="fa fa-minus"></em>
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                            <label style="float: left;">
                                <strong>Client</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <a href="">John Winston Drake (0002-0001-0002)</a>
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
                            <label style="float: left;">
                                <strong>Activation Date</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span>14-10-2000</span>
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
                            <label style="float: left;">
                                <strong>Branch Name</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span>Sub Branch 1</span>
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
                            <label style="float: left;">
                                <strong>Loan Officer</strong>
                            </label>
                            <!-- <div class="controls" style="margin-left: 100px">
                                <span>Sub Branch 1</span>
                            </div> -->
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
                                    <td>Doe enterprises</td>
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
        <!-- client information card ends -->


        <!-- group information card starts -->
        <div class="card card-default" id="cardDemo2">
            <div class="card-header">
                <div class="card-title">
                    Group Information
                </div>
                <a class="float-right" href="#" data-tool="card-collapse" data-toggle="tooltip" title="Collapse Card">
                    <em class="fa fa-minus"></em>
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                            <label style="float: left;">
                                <strong>Group</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span>Blessed</span>
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
                            <label style="float: left; text-align: right">
                                <strong>Members</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span>3 Members</span>
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
                            <label style="float: left; text-align: right">
                                <strong>Exposure</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span>5 Active Loans, 10, 051, 159.21 $</span>
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
        <!-- group information card ends -->

        <!-- Account History card starts -->
         <div class="card card-default" id="cardDemo3">
            <div class="card-header">
                <div class="card-title">
                    Account History
                </div>
                <a class="float-right" href="#" data-tool="card-collapse" data-toggle="tooltip" title="Collapse Card">
                    <em class="fa fa-minus"></em>
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                            <label style="float: left;">
                                <strong>Loans</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span></span>
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
                            <label style="float: left;">
                                <strong>Out.Balance </strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span>10,040,158.00</span>
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
                            <label style="float: left; text-align: right">
                                <strong>Loan Cycle</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span>6</span>
                            </div>
                    </div>
                    <div class="col">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                            <label style="float: left;">
                                <strong>Timely Repayments</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span>88 %</span>
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
        <!-- Account History card ends -->


        <!-- Loan Application Information card starts-->
        <div class="card card-default" id="cardDemo3">
            <div class="card-header">
                <div class="card-title">
                    Loan Application Information
                </div>
                <a class="float-right" href="#" data-tool="card-collapse" data-toggle="tooltip" title="Collapse Card">
                    <em class="fa fa-minus"></em>
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                            <label style="float: left;">
                                <strong>Loan Product</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span>Declining &dash; Accrual</span>
                            </div>
                    </div>
                    <div class="col">
                        <label style="float: left">
                            <strong>Loan Purpose</strong>
                        </label>
                        <div class="controls" style="margin-left: 100px">
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                            <label style="float: left; text-align: right">
                                <strong>Loan Amount</strong>
                            </label>
                            <div class="controls" style="margin-left: 100px">
                                <span>40,000.00 $</span>
                            </div>
                    </div>
                    <div class="col">
                        <label style="float: left">
                            <strong>APR</strong>
                        </label>
                        <div class="controls" style="margin-left: 100px">
                            <span>12.00 %</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                            <label style="float: left; text-align: right">
                                <strong>Charges</strong>
                            </label>
                            <div style="margin-left: 100px">
                                <span>0.00 $</span>
                            </div>
                    </div>
                    <div class="col">
                        <label style="float: left">
                            <strong>EIR</strong>
                        </label>
                        <div style="margin-left: 100px">
                            <span>12.60 %</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                            <label style="float: left; text-align: right">
                                <strong>Interest Rate</strong>
                            </label>
                            <div style="margin-left: 100px">
                                <span>12 Per Year</span>
                            </div>
                    </div>
                    <div class="col">
                        <label style="float: left">
                            <strong>Loan Sector</strong>
                        </label>
                        <div style="margin-left: 100px">
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                            <label style="float: left; text-align: right">
                                <strong>Loan Term</strong>
                            </label>
                            <div style="margin-left: 100px">
                                <span>4 months</span>
                            </div>
                    </div>
                    <div class="col">
                        <label style="float: left">
                            <strong>Channel</strong>
                        </label>
                        <div style="margin-left: 100px">
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                            <label style="float: left; text-align: right">
                                <strong>Repayment Every</strong>
                            </label>
                            <div style="margin-left: 100px">
                                <span>1 Months</span>
                            </div>
                    </div>
                    <div class="col">
                        <label style="float: left">
                            <strong>Origin of Funding</strong>
                        </label>
                        <div style="margin-left: 100px">
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                            <label style="float: left; text-align: right">
                                <strong>Linked Account</strong>
                            </label>
                            <div style="margin-left: 100px">
                                <span></span>
                            </div>
                    </div>
                    <div class="col">
                        <label style="float: left">
                            <strong>No Of Guarantors</strong>
                        </label>
                        <div style="margin-left: 100px">
                            <span>0</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                            <label style="float: left; text-align: right">
                                <strong>Signature</strong>
                            </label>
                            <div style="margin-left: 100px">
                                <span></span>
                            </div>
                    </div>
                    <div class="col">
                        <label style="float: left">
                            <strong>Collateral Value</strong>
                        </label>
                        <div style="margin-left: 100px">
                            <span>0</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col">
                        <button class="btn btn-primary">
                            <span>Preview Schedule</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-wrapper">
               <div class="card-body">
                  <div class="collapseOne" style="border: 2px; border-top-style: dashed;">
                    <div class="charges mt-3">
                        <div>
                            <h3>Charges</h3>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Collected On</th>
                                    <th>Payment mode</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>

                    <div class="Guarantors mt-3">
                        <div>
                            <h3>Guarantors</h3>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Guarantor Type</th>
                                    <th>Branch Name</th>
                                    <th>Amount Guarantee</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>

                    <div class="Collateral mt-3">
                        <div>
                            <h3>Collateral</h3>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>value</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                  </div>
               </div>
            </div>
         </div>
        <!-- Loan Application Information card ends -->

        <!-- CRB card starts -->
         <div class="card">
            <div class="card-header pl-4">
                <div class="card-title">
                    CRB
                </div>
                <div class="mt-3">
                    <a href="" class="btn btn-primary">
                        <span>Metropol</span>
                    </a>
                </div>
            </div>
             <div class="card-body mx-2">
                 <table class="table table-bordered table-striped my-4 w-100">
                     <thead>
                         <tr>
                             <th>ID</th>
                             <th>Start Date</th>
                             <th>End Date</th>
                             <th>Client</th>
                             <th>Loan Account</th>
                             <th>Status</th>
                         </tr>
                     </thead>
                     <tbody>

                     </tbody>
                 </table>
             </div>
         </div>
        <!-- CRB card ends -->

         <!-- Custom Forms card starts -->
         <div class="card">
            <div class="card-header pl-4">
                <div class="card-title">
                    Custom Forms
                </div>
                <div class="mt-3">
                    <a href="" class="btn btn-primary">
                        <span>Survey</span>
                    </a>
                </div>
            </div>
            <div class="card-body well m-4">
                <table class="table table-bordered table-striped my-4 w-100" id="datatable3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Client</th>
                            <th>Loan Account</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
       <!-- Custom forms card ends -->


    </div>
@endsection

@section('scripts')
    <script src="{{ asset('angle/js/datatable.js') }}"></script>
@endsection