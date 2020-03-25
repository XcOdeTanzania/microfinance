<template>
    <div>
        <div class="content-heading">
    <div>
        LoanID_with_Loanactive
        <div class="badge badge-success">Active</div>
    </div>
</div>
<div class="col pl-0 pr-0">
    <div class="card mb-3 border-secondary">
        <div class="card-header bg-secondary ">

        </div>
        <div class="card-body row">
            <div class="col-lg-6">
                <form class="form-horizontal">
                    <div class="form-group row">
                        <div class="col-md-4">Client Name</div>
                        <div class="col-md-8"><strong>client_name</strong></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">Group Name</div>
                        <div class="col-md-8"><strong>group_name</strong></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">Original Officer</div>
                        <div class="col-md-8"><strong>Loan, officer 3 Loan</strong></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">Loan Officer</div>
                        <div class="col-md-8"><strong>Loan, officer 3 Loan</strong></div>
                    </div>
                </form>
            </div>
            <div class="right">

            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <!-- DATATABLE TO VIEW ALL LOANS D -->
    <div class="card">
        <div class="card card-default">
            <div class="card-header">Loan details</div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="summary" data-toggle="tab" href="#summary" role="tab" aria-controls="summary" aria-selected="true">summary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="details" data-toggle="tab" href="#details-tab" role="tab" aria-controls="details" aria-selected="false">Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="repayment" data-toggle="tab" href="#repayment-schedule" role="tab" aria-controls="repayment" aria-selected="false">Repayment Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="transaction" data-toggle="tab" href="#transaction-tab" role="tab" aria-controls="transaction" aria-selected="false">Transaction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="security" data-toggle="tab" href="#security-tab" role="tab" aria-controls="security" aria-selected="false">Security</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="standing-instruction" data-toggle="tab" href="#standing-instruction-tab" role="tab" aria-controls="standing-instruction" aria-selected="false">Standing Instruction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="crb" data-toggle="tab" href="#crb-tab" role="tab" aria-controls="crb" aria-selected="false">CRB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="group-allocation" data-toggle="tab" href="#group-allocation-tab" role="tab" aria-controls="group-allocation" aria-selected="false">Group Member Allocation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="survey" data-toggle="tab" href="#survey-tab" role="tab" aria-controls="survey" aria-selected="false">Survey</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <!-- Summary tab pane -->
                    <div class="tab-pane fade show active" id="summary" role="tabpanel" aria-labelledby="summary">
                        <section>
                            <!-- loans details  -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <div class="col-md-4">Loan Cycle</div>
                                            <div class="col-md-8"><strong>987654</strong></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">Timely Repayment:</div>
                                            <div class="col-md-8"><strong>03/11/2015 10:10</strong></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">Amount in Arrears</div>
                                            <div class="col-md-8"><strong>Addison Nichols</strong></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">Days in Arrears</div>
                                            <div class="col-md-8"><strong>547</strong></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <div class="col-md-4">Date Disbursed</div>
                                            <div class="col-md-8"><strong>#32654</strong></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">Last Payment</div>
                                            <div class="col-md-8"><strong>Addison Nichols</strong></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">Next Payment</div>
                                            <div class="col-md-8"><strong>addisong@mail.com</strong></div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">Fina payment Expected</div>
                                            <div class="col-md-8"><strong>Addison co.</strong></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover">
                                <tr>Summary</tr>
                                <tr>
                                    <th></th>
                                    <th>Contract</th>
                                    <th>Paid</th>
                                    <th>OutStanding</th>
                                    <th>overdue</th>
                                </tr>
                                <tr>
                                    <th>Principal</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Interest</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Fees</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Penalties</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>

                            <div class="row mt-2 ml-1">
                                <button class="btn btn-labeled btn-primary" type="button">
                                    <span class="btn-label"><i class="fa fa-arrow-left"></i></span>
                                    Left
                                </button>
                                <!-- Standard button with label on the right side-->
                                <button class="btn btn-labeled btn-primary" type="button">
                                    Right
                                    <span class="btn-label btn-label-right"><i class="fa fa-arrow-right"></i></span>
                                </button>
                            </div>
                        </section>
                    </div>

                    <!-- Detail tab pane -->
                    <div class="tab-pane fade" id="details-tab" role="tabpanel" aria-labelledby="details">
                        <!-- loans details  -->
                        <div class="row">
                            <div class="col-lg-6">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <div class="col-md-4">Account ID:</div>
                                        <div class="col-md-8"><strong>987654</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Loan Amount:</div>
                                        <div class="col-md-8"><strong>03/11/2015 10:10</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Loarn Term:</div>
                                        <div class="col-md-8"><strong>Addison Nichols</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Repayment Every:</div>
                                        <div class="col-md-8"><strong>547</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Linked Account:</div>
                                        <div class="col-md-8"><strong>$515.20</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Interest Type</div>
                                        <div class="col-md-8"><strong>Flat</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Signature</div>
                                        <div class="col-md-8">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <div class="col-md-4">Loan Product:</div>
                                        <div class="col-md-8"><strong>#32654</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Loan Purpose:</div>
                                        <div class="col-md-8"><strong>Addison Nichols</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">APR:</div>
                                        <div class="col-md-8"><strong>addisong@mail.com</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">EIR:</div>
                                        <div class="col-md-8"><strong>Addison co.</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Loan Sector:</div>
                                        <div class="col-md-8"><strong>(123) 123 456465</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Channel</div>
                                        <div class="col-md-8">
                                            <div class="">default loan fund</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">No of Guarantors</div>
                                        <div class="col-md-8">
                                            <div class="">0</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Collateral values</div>
                                        <div class="col-md-8">
                                            <div class="">0.00</div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Detail tab table  -->
                        <div class="row">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Collected Type</th>
                                    <th>Payment mode</th>
                                    <th>Charge Type</th>
                                    <th>Wave Penalty</th>
                                </tr>
                                <tr>
                                    <td>Late Payment</td>
                                    <td>Flat</td>
                                    <td>1000</td>
                                    <td>10/3/2020</td>
                                    <td>Normal</td>
                                    <td>Regular</td>
                                    <th>Charge waived</th>
                                </tr>

                            </table>

                        </div>

                        <!-- Add Button  and previous and next button -->
                        <div class="row">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#charges"><i class="fa fa-plus">&nbsp;Add Charges</i></button>
                        </div>
                        <div class="row mt-2">
                            <button class="btn btn-labeled btn-secondary" type="button">
                                <span class="btn-label"><i class="fa fa-arrow-left"></i></span>
                                Left
                            </button>
                            <!-- Standard button with label on the right side-->
                            <button class="btn btn-labeled btn-secondary" type="button">
                                Right
                                <span class="btn-label btn-label-right"><i class="fa fa-arrow-right"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="repayment-schedule" role="tabpanel" aria-labelledby="payment">
                        <div class="card card-default">
                            <div class="card-header">Repayment Schedule</div>
                            <div class="card-body">
                                <div class="table-responsive table-bordered">
                                    <table class="table table-sm">
                                        <thead>
                                        <tr class = "bg-gray">
                                            <th style="border-left:1px; border-top: 1px !important;border-color:#1D68A7 !important;" class= "empty" colspan="4"></th>
                                            <th style="border-left:1px;border-color:#1D68A7 !important;" colspan="3">Loan Amount and Balance</th>
                                            <th style="border-left:1px;border-color:#1D68A7 !important;"colspan="3">Total Cost of Loan</th>
                                            <th style="border-left:1px;border-color:#1D68A7 !important;"colspan="2">Compulsory Savings</th>
                                            <th class= "empty" colspan="3"></th>
                                        </tr>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th># Days</th>
                                            <th style="border-left:1px;border-color:#1D68A7;!important;">Paid by</th>
                                            <th  class= "boarder-left boarder-primary">Disbursement</th>
                                            <th>Principle Due</th>
                                            <th style="border-left:1px;border-color:#1D68A7;!important;"> Principle Balance</th>
                                            <th>Interest due</th>
                                            <th>Fees</th>
                                            <th style="border-left:1px;border-color:#1D68A7;!important;">Penalties</th>
                                            <th>Expected Savings</th>
                                            <th style="border-left:1px;border-color:#1D68A7;!important;">Actual Savings</th>
                                            <th>Total Due</th>
                                            <th>Total Paid</th>
                                            <th>Total OutStanding</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td></td>
                                            <td>10-01-2020</td>
                                            <td></td>
                                            <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;"></td>
                                            <td>50000.00</td>
                                            <td ></td>
                                            <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;">50000.00</td>
                                            <td></td>
                                            <td>0.00</td>
                                            <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;"></td>
                                            <td>5000.00</td>
                                            <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;"></td>
                                            <td>0.00</td>
                                            <td>0.00</td>
                                            <td></td>
                                        </tr>
                                       
                                            <tr v-for="row in [123456]" :key="row[0]">
                                                <td></td>
                                                <td>10-01-2020</td>
                                                <td></td>
                                                <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;"></td>
                                                <td>50000.00</td>
                                                <td ></td>
                                                <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;">50000.00</td>
                                                <td></td>
                                                <td>0.00</td>
                                                <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;"></td>
                                                <td>5000.00</td>
                                                <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;"></td>
                                                <td>0.00</td>
                                                <td>0.00</td>
                                                <td></td>
                                            </tr>
                                        <tr class = "bg-gray">
                                            <td></td>
                                            <td>Total</td>
                                            <td>60</td>
                                            <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;"></td>
                                            <td>50000.00</td>
                                            <td>14000.00</td>
                                            <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;"></td>
                                            <td>1000.00</td>
                                            <td>1000.00</td>
                                            <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;">0.00</td>
                                            <td>5000.00</td>
                                            <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;"></td>
                                            <td>16000.00</td>
                                            <td>7500.00</td>
                                            <td>8500.00</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Transaction tab pane -->
                    <div class="tab-pane fade" id="repayment-schedule" role="tabpanel" aria-labelledby="payment">
                        <div class="card card-default">
                        <div class="card-header">Repayment Schedule</div>
                             <div class="card-body">
                                  <div class="table-responsive table-bordered">
                                       <table class="table table-sm">
                                       <thead> 
                                        <tr class = "bg-gray">
                                           <th style="border-left:1px; border-top: 1px !important;border-color:#1D68A7 !important;" class= "empty" colspan="4"></th>
                                           <th style="border-left:1px;border-color:#1D68A7 !important;" colspan="3">Loan Amount and Balance</th>
                                           <th style="border-left:1px;border-color:#1D68A7 !important;" colspan="3">Total Cost of Loan</th>
                                           <th style="border-left:1px;border-color:#1D68A7 !important;" colspan="2">Compulsory Savings</th>
                                           <th class= "empty" colspan="3"></th>
                                        </tr>
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th># Days</th>
                                                <th style="border-left:1px;border-color:#1D68A7;!important;">Paid by</th>
                                                <th  class= "boarder-left boarder-primary">Disbursement</th>
                                                <th>Principle Due</th>
                                                <th style="border-left:1px;border-color:#1D68A7;!important;"> Principle Balance</th>
                                                <th>Interest due</th>
                                                <th>Fees</th>
                                                <th style="border-left:1px;border-color:#1D68A7;!important;">Penalties</th>
                                                <th>Expected Savings</th>
                                                <th style="border-left:1px;border-color:#1D68A7;!important;">Actual Savings</th>
                                                <th>Total Due</th>
                                                <th>Total Paid</th>
                                                <th>Total OutStanding</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>10-01-2020</td>
                                                <td></td>
                                                <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;"></td>
                                                <td>50000.00</td>
                                                <td ></td>
                                                <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;">50000.00</td>
                                                <td></td>
                                                <td>0.00</td>
                                                <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;"></td>
                                                <td>5000.00</td>
                                                <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;"></td>
                                                <td>0.00</td>
                                                <td>0.00</td>
                                                <td></td>
                                            </tr>
                                           
                                            <tr v-for="row in [0,1,2,3]" :key="row[0]">
                                                <td>x</td>
                                                <td>10-01-2020</td>
                                                <td></td>
                                                <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;"></td>
                                                <td>50000.00</td>
                                                <td ></td>
                                                <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;">50000.00</td>
                                                <td></td>
                                                <td>0.00</td>
                                                <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;"></td>
                                                <td>5000.00</td>
                                                <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;"></td>
                                                <td>0.00</td>
                                                <td>0.00</td>
                                                <td></td>
                                            </tr>
                                            @endfor
                                            <tr class = "bg-gray">
                                                <td></td>
                                                <td>Total</td>
                                                <td>60</td>
                                                <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;"></td>
                                                <td>50000.00</td>
                                                <td>14000.00</td>
                                                <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;"></td>
                                                <td>1000.00</td>
                                                <td>1000.00</td>
                                                <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;">0.00</td>
                                                <td>5000.00</td>
                                                <td style="border-left:1px;border-color:#1D68A7; border-top-color: #80808033; border-bottom:0px; !important;"></td>
                                                <td>16000.00</td>
                                                <td>7500.00</td>
                                                <td>8500.00</td> 
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>            
                    </div>
                    <div class="tab-pane fade" id="transaction-tab" role="tabpanel" aria-labelledby="transaction">
                        <div class="card-body">
                            <table class="table table-striped my-4 w-100" id="datatable2">
                                <thead>
                                    <tr>
                                        <th data-priority="1">Account Nbr</th>
                                        <th>Branch</th>
                                        <th>Loan Officer</th>
                                        <th>Group Name</th>
                                        <th class="sort-alpha">Amount</th>
                                        <th class="sort-alpha">Balance</th>
                                        <th class="sort-alpha">Disbursed</th>
                                        <th class="sort-alpha">Product Name</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="gradeX">
                                        <td>Trident</td>
                                        <td>Internet Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td>4</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td><a href="/loan/details" class="btn btn-primary" type="submit"><i class="fa fa-eye"></i>&nbsp;view</a></td>
                                    </tr>
                                    <tr class="gradeC">
                                        <td>Trident</td>
                                        <td>Internet Explorer 5.0</td>
                                        <td>Win 95+</td>
                                        <td>5</td>
                                        <td>C</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td><button class="btn btn-primary"><i class="fa fa-eye"></i>&nbsp;view</button></td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Trident</td>
                                        <td>Internet Explorer 5.5</td>
                                        <td>Win 95+</td>
                                        <td>5.5</td>
                                        <td>A</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td><button class="btn btn-primary"><i class="fa fa-eye"></i>&nbsp;view</button></td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Trident</td>
                                        <td>Internet Explorer 6</td>
                                        <td>Win 98+</td>
                                        <td>6</td>
                                        <td>A</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td><button class="btn btn-primary"><i class="fa fa-eye"></i>&nbsp;view</button></td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Trident</td>
                                        <td>Internet Explorer 7</td>
                                        <td>Win XP SP2+</td>
                                        <td>7</td>
                                        <td>A</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td><button class="btn btn-primary"><i class="fa fa-eye"></i>&nbsp;view</button></td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Trident</td>
                                        <td>AOL browser (AOL desktop)</td>
                                        <td>Win XP</td>
                                        <td>6</td>
                                        <td>A</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td><button class="btn btn-primary"><i class="fa fa-eye"></i>&nbsp;view</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Min-statement and loan journal buttons -->
                        <div class="row">
                            <button class="btn btn-labeled btn-primary " type="button">
                                <span class="btn-label"><i class="fa fa-note"></i></span>
                                Min-statement
                            </button>
                            <button class="btn btn-labeled btn-primary " type="button">
                                <span class="btn-label"><i class="fa fa-eye"></i></span>
                                View Loan Journal
                            </button>
                        </div>
                        <!-- Next and previous buttons -->
                        <div class="row mt-2">
                            <button class="btn btn-labeled btn-primary " type="button">
                                <span class="btn-label"><i class="fa fa-arrow-left"></i></span>
                                previous
                            </button>
                            <!-- Standard button with label on the right side-->
                            <button class="btn btn-labeled btn-primary pl-2" type="button">
                                Next
                                <span class="btn-label btn-label-right"><i class="fa fa-arrow-right"></i></span>
                            </button>
                        </div>
                    </div>
                    <!-- Security tab pane -->
                    <div class="tab-pane fade" id="security-tab" role="tabpanel" aria-labelledby="security">
                        <div class="row">
                            <h4>Guarantors</h4>
                        </div>
                        <div class="row">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <th>Guarantor Type</th>
                                    <th>Branch Name</th>
                                    <th>Amount Guarantee</th>
                                </tr>
                            </table>
                        </div>
                        <div class="row">
                            <h4>Collateral</h4>
                        </div>
                        <div class="row">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Value</th>
                                </tr>
                            </table>
                        </div>

                        <!-- Next and previous buttons -->
                        <div class="row mt-2">
                            <button class="btn btn-labeled btn-primary " type="button">
                                <span class="btn-label"><i class="fa fa-arrow-left"></i></span>
                                previous
                            </button>
                            <!-- Standard button with label on the right side-->
                            <button class="btn btn-labeled btn-primary pl-2" type="button">
                                Next
                                <span class="btn-label btn-label-right"><i class="fa fa-arrow-right"></i></span>
                            </button>
                        </div>
                    </div>
                    <!-- Standing instruction pane -->
                    <div class="tab-pane fade" id="standing-instruction-tab" role="tabpanel" aria-labelledby="standard-instruction">
                        <div class="row mt-2">
                            <!-- table -->
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <th>From Client</th>
                                    <th>From Account Number</th>
                                    <th>To Client</th>
                                    <th>To Account Number</th>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                        <!-- Button next  -->
                        <div class="row mt-2">
                            <button class="btn btn-labeled btn-primary " type="button">
                                <span class="btn-label"><i class="fa fa-arrow-left"></i></span>
                                previous
                            </button>
                            <!-- Standard button with label on the right side-->
                            <button class="btn btn-labeled btn-primary pl-2" type="button">
                                Next
                                <span class="btn-label btn-label-right"><i class="fa fa-arrow-right"></i></span>
                            </button>
                        </div>
                    </div>
                    <!-- Crb tab pane -->
                    <div class="tab-pane fade" id="crb-tab" role="tabpanel" aria-labelledby="crb">
                        <div class="row mt-2">
                            <!-- table -->
                            <div class="table-responsive table-bordered">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>ID</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Client</th>
                                        <th>Loan Account</th>
                                        <th>Status</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </table>
                                <div class="row mt-2">
                                    <button class="btn btn-labeled btn-primary ml-2 " type="button">
                                        <span class="btn-label"><i class="fa fa-arrow-left"></i></span>
                                        previous
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Group allocation tab pane -->
                    <div class="tab-pane fade" id="group-allocation-tab" role="tabpanel" aria-labelledby="group">
                        <div class="row mt-2">
                            <!-- table -->
                            <div class="table-responsive table-bordered">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Client Id</th>
                                        <th>Client</th>
                                        <th>Amount</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </table>
                                <div class="row">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Survey tab pane -->
                    <div class="tab-pane fade" id="survey-tab" role="tabpanel" aria-labelledby="survey">
                        <div class="card-body">
                            <table class="table table-striped my-4 w-100" id="datatable">
                                <thead>
                                    <tr>
                                        <th data-priority="1">Account Nbr</th>
                                        <th>Client Name</th>
                                        <th>Savings Account Number/th>
                                        <th class="sort-alpha" data-priority="2">Approved Shares</th>
                                        <th class="sort-alpha" data-priority="2">Prodcut Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="gradeX">
                                        <td>Trident</td>
                                        <td>Internet Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td>4</td>
                                        <td>X</td>
                                    </tr>
                                    <tr class="gradeC">
                                        <td>Trident</td>
                                        <td>Internet Explorer 5.0</td>
                                        <td>Win 95+</td>
                                        <td>5</td>
                                        <td>C</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Trident</td>
                                        <td>Internet Explorer 5.5</td>
                                        <td>Win 95+</td>
                                        <td>5.5</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Trident</td>
                                        <td>Internet Explorer 6</td>
                                        <td>Win 98+</td>
                                        <td>6</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Trident</td>
                                        <td>Internet Explorer 7</td>
                                        <td>Win XP SP2+</td>
                                        <td>7</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Trident</td>
                                        <td>AOL browser (AOL desktop)</td>
                                        <td>Win XP</td>
                                        <td>6</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Gecko</td>
                                        <td>Firefox 1.0</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td>1.7</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Gecko</td>
                                        <td>Firefox 1.5</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td>1.8</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Gecko</td>
                                        <td>Firefox 2.0</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td>1.8</td>
                                        <td>A</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</template>

<script>
export default {
    props:['loan'],
    data() {
        return {}
    },

    methods:{},
    mounted() {
        console.log(this.loan)
    }
}
</script>

<style>

</style>