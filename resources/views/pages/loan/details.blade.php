@extends('layouts.app')
@section('content')
<div class="content-heading">
    <div>
        LoanID_with_LoanType
        <small>status</small>
    </div>
</div>
<div class="col pl-0 pr-0">
    <div class="card mb-3 border-secondary">
        <div class="card-header bg-secondary ">

        </div>
        <div class="card-body row">
            <table class="table col-6 ">
                <tbody>
                    <tr>
                        <td>Client name</td>
                        <td>name</td>
                    </tr>
                    <tr>
                        <td>Group name</td>
                        <td>group_name</td>
                    </tr>
                    <tr>
                        <td>Original Officer</td>
                        <td>officer_name</td>
                    </tr>
                    <tr>
                        <td>Loan Officer</td>
                        <td>loan_officer_name</td>
                    </tr>
                </tbody>
            </table>
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
                    <div class="tab-pane fade show active" id="summary" role="tabpanel" aria-labelledby="summary">
                        <section>
                            <table class="table">
                                <tr>
                                    <td>Loan cycle</td>
                                    <td>Date Disbursed</td>
                                </tr>
                                <tr>
                                    <td>Timely Repayment</td>
                                    <td>Last Payment</td>
                                </tr>
                                <tr>
                                    <td>Amount in Arreas</td>
                                    <td>Next Payment</td>
                                </tr>
                                <tr>
                                    <td>Days in Arrears</td>
                                    <td>Final Payment Expected</td>
                                </tr>
                            </table>

                            <table class="table">
                                <tr>
                                    <td>Summary</td>
                                </tr>
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
                        </section>
                    </div>
                    <div class="tab-pane fade" id="details-tab" role="tabpanel" aria-labelledby="details">
                        <div class="row">
                            <div class="col-lg-6">
                                <p class="lead bb">Details</p>
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <div class="col-md-4">Order ID:</div>
                                        <div class="col-md-8"><strong>987654</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Purchased On:</div>
                                        <div class="col-md-8"><strong>03/11/2015 10:10</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Client Name:</div>
                                        <div class="col-md-8"><strong>Addison Nichols</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Items:</div>
                                        <div class="col-md-8"><strong>547</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Amount:</div>
                                        <div class="col-md-8"><strong>$515.20</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Shipment:</div>
                                        <div class="col-md-8"><strong>04/10/2015</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Status</div>
                                        <div class="col-md-8">
                                            <div class="badge badge-info">Shipped</div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <p class="lead bb">Client</p>
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <div class="col-md-4">Client ID:</div>
                                        <div class="col-md-8"><strong>#32654</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Name:</div>
                                        <div class="col-md-8"><strong>Addison Nichols</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Email:</div>
                                        <div class="col-md-8"><strong>addisong@mail.com</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Company:</div>
                                        <div class="col-md-8"><strong>Addison co.</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Phone:</div>
                                        <div class="col-md-8"><strong>(123) 123 456465</strong></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">Status</div>
                                        <div class="col-md-8">
                                            <div class="badge badge-success">Active</div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="repayment-schedule" role="tabpanel" aria-labelledby="payment">...</div>
                    <div class="tab-pane fade" id="transaction-tab" role="tabpanel" aria-labelledby="transaction">
                        <div class="card-body">
                            <table class="table table-striped my-4 w-100" id="datatable2">
                                <thead>
                                    <tr>
                                        <th data-priority="1">Account Nbr</th>
                                        <th>Branch</th>
                                        <th>Loan Officer</th>Group Name</th>
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
                                        <td><a href="/loan/details"><button class="btn btn-primary" type="submit"><i class="fa fa-eye">&nbsp;view</i></a></td>
                                    </tr>
                                    <tr class="gradeC">
                                        <td>Trident</td>
                                        <td>Internet Explorer 5.0</td>
                                        <td>Win 95+</td>
                                        <td>5</td>
                                        <td>C</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td><button class="btn btn-primary"><i class="fa fa-eye">&nbsp;view</i></a></td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Trident</td>
                                        <td>Internet Explorer 5.5</td>
                                        <td>Win 95+</td>
                                        <td>5.5</td>
                                        <td>A</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td><button class="btn btn-primary"><i class="fa fa-eye">&nbsp;view</i></a></td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Trident</td>
                                        <td>Internet Explorer 6</td>
                                        <td>Win 98+</td>
                                        <td>6</td>
                                        <td>A</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td><button class="btn btn-primary"><i class="fa fa-eye">&nbsp;view</i></a></td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Trident</td>
                                        <td>Internet Explorer 7</td>
                                        <td>Win XP SP2+</td>
                                        <td>7</td>
                                        <td>A</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td><button class="btn btn-primary"><i class="fa fa-eye">&nbsp;view</i></a></td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td>Trident</td>
                                        <td>AOL browser (AOL desktop)</td>
                                        <td>Win XP</td>
                                        <td>6</td>
                                        <td>A</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td><button class="btn btn-primary"><i class="fa fa-eye">&nbsp;view</i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="security-tab" role="tabpanel" aria-labelledby="security">
                        
                    </div>
                    <div class="tab-pane fade" id="standing-instruction-tab" role="tabpanel" aria-labelledby="standard-instruction">...</div>
                    <div class="tab-pane fade" id="crb-tab" role="tabpanel" aria-labelledby="crb">...</div>
                    <div class="tab-pane fade" id="group-allocation-tab" role="tabpanel" aria-labelledby="group">...</div>
                    <div class="tab-pane fade" id="survey-tab" role="tabpanel" aria-labelledby="survey">...</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('styles')@endsection
@section('scripts')
<script src="{{ asset('angle/js/datatable.js') }}"></script>
<script src="{{ asset('angle/js/wizard.js') }}"></script>
<script>
    $("#example").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "slide"
    });
    // $("#example").steps({
    //         headerTag: "h4",
    //         bodyTag: "section",
    //         transitionEffect: "slideLeft",
    //     });
</script>
@endsection