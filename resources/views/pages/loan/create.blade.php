<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 07-Mar-20
 * Time: 14:12
 */ ?>

{{-- Create Loan page--}}
@extends('layouts.app')
@section('content')
    <div class="card card-default">
        <div class="card-header"> Loan Application</div>
        <div class="card-body">
            <form id="example-form" action="{{route('loan.create')}}" method="POST">
                @csrf
                <div>
                    <h4>
                        Terms
                        <br/>
                        <small> Loan Basic Terms</small>
                    </h4>
                    <fieldset class="overflow-auto">
                        <div class=" col ">
                            <div class="row justify-content-center justify-content-sm-center justify-content-md-center  ">
                                <div class="col-lg-4 col-md-6 col-sm-8 col-12 ">
                                    <div class="form-group">
                                        <label for="clientApplyForLoan"> Client </label>
                                        <div class="autocomplete">
                                            <input  name="client" id="clientApplyForLoan" class="form-control" type="text"
                                                    placeholder="Individual / Group"/>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="loanType"> Loan Type </label>
                                        <select class="custom-select form-control" name="loanType" id="loanType">
                                            <option selected value="no">Normal</option>
                                            <option value="yes">Flat rate</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="topUp">Top up</label>
                                        <select class="custom-select form-control" name="topUp" id="topUp">
                                            <option selected value="no">No</option>
                                            <option value="yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Loan Size</label>
                                        <div class=" input-group ">
                                            <input class="form-control" type="number" placeholder="Loan size"
                                                   aria-label="Loan size" aria-describedby="basic-addon2"/>
                                            <div class="input-group-append"><span class="input-group-text"
                                                                                  id="basic-addon2">TZS</span></div>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-8 col-12 ">
                                    <div class="form-group">
                                        <label for="fundingOrigin">Origin of Funding</label>
                                        <input name="fundingOrigin" id="fundingOrigin" class="form-control" type="text"
                                               placeholder="Funding origin"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="loanTermCount">Loan Term</label>
                                        <div class=" input-group ">
                                            <input id="loanTermCount" name="loanTermCount" class="form-control"
                                                   type="number" placeholder="Duration" aria-label="Loan term"
                                                   aria-describedby="basic-addon2"/>
                                            <div class="input-group-append">
                                                <select class="custom-select form-control" name="loanTermTime"
                                                        id="loanTermTime">
                                                    <option value="days">Days</option>
                                                    <option value="weeks">Weeks</option>
                                                    <option selected value="month">Months</option>
                                                    <option value="years">Years</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disburseFrequencyCount">Repayment Every</label>
                                        <div class=" input-group ">
                                            <input id="disburseFrequencyCount" name="disburseFrequencyCount"
                                                   class="form-control" type="number" placeholder="Count"
                                                   aria-label="Loan term" aria-describedby="basic-addon2"/>
                                            <div class="input-group-append">
                                                <select class="custom-select form-control" name="disburseFrequencyTime"
                                                        id="disburseFrequencyTime">
                                                    <option value="days">Days</option>
                                                    <option selected value="weeks">Weeks</option>
                                                    <option value="month">Months</option>
                                                    <option value="years">Years</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-8 col-12 ">
                                    <div class="form-group">
                                        <label for="interestRate">Interest Rate</label>
                                        <div class=" input-group ">
                                            <input name="interestRate" id="interestRate" class="form-control"
                                                   type="text" placeholder="Interest Rate"/>
                                            <div class="input-group-append">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                        % per Year
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="disbursementDate">Disbursement Date</label>
                                        <div class="input-group date" id="datetimepicker1">
                                            <input id="disbursementDate" class="form-control" type="text"/>
                                            <span class="input-group-append input-group-addon"><span
                                                        class="input-group-text fas fa-calendar-alt"></span></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="graceOnInterestPayment">Grace on Interest Payment</label>
                                        <input name="graceOnInterestPayment" id="graceOnInterestPayment"
                                               class="form-control" type="number"
                                               placeholder="Grace on principal payment"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="graceOnPrincipalPayment">Grace on Principal Payment</label>
                                        <input name="graceOnPrincipalPayment" id="graceOnPrincipalPayment"
                                               class="form-control" type="number"
                                               placeholder="Grace on Principal Payment"/>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </fieldset>
                    <h4>Details
                        <br/>
                        <small> Loan Description</small>
                    </h4>
                    <fieldset class="overflow-auto">
                        <div class="col">
                            <div class="row justify-content-center justify-content-sm-center justify-content-md-center  ">
                                <div class="col-lg-4 col-md-6 col-sm-8 col-12 ">
                                    <div class="form-group">
                                        <label for="loanPurpose"> Loan Purpose</label>
                                        <input name="loanPurpose" id="loanPurpose" class="form-control" type="text"
                                               placeholder=" Purpose"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="autoStandingInstruction"> Auto Create Standing Instruction </label>
                                        <select class="custom-select form-control" name="autoStandingInstruction"
                                                id="autoStandingInstruction">
                                            <option selected value="no">No</option>
                                            <option value="yes">Yes</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="repaymentStartingDate">Repayment Starting Date</label>
                                        <div class="input-group date AngleDatePicker">
                                            <input id="repaymentStartingDate" name="repaymentStartingDate"
                                                   class="form-control" type="text"/>
                                            <span class="input-group-append input-group-addon"><span
                                                        class="input-group-text fas fa-calendar-alt"></span></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="loanSector"> Loan Sector</label>
                                        <select class="custom-select form-control" name="loanSector" id="loanSector">
                                            <option selected value=""></option>
                                            <option value="sector1">Sector 1</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="loanChannel"> Channel </label>
                                        <select class="custom-select form-control" name="loanChannel" id="loanChannel">
                                            <option selected value=""></option>
                                            <option value="channel1">Channel 1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <h4>
                        Charges
                        <br/>
                        <small> Loan Charges</small>
                    </h4>
                    <fieldset class="overflow-auto">
                        <div class="table-responsive table-bordered">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Collected on</th>
                                    <th>Date</th>
                                    <th>Payment Mode</th>
                                </tr>
                                </thead>
                                <tbody id="chargesTableBody">
                                <tr>
                                    <td>Loan Account fee</td>
                                    <td>Flat</td>
                                    <td>2000</td>
                                    <td>Installment</td>
                                    <td></td>
                                    <td>Normal</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-row align-items-center">
                            <div class="col-auto">
                                <label class="sr-only" for="charge">Charge</label>
                                <select id="selectCharge" class="form-control mb-2"  name="charge" >
                                    @foreach($charges as $charge)
                                    <option value="{{$charge}}" >{{$charge->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary mb-2" onclick="addChargesToTable();" type="button">Add To Product</button>
                            </div>
                        </div>

                        <!-- Collateral  -->
                    </fieldset>
                    <h4>
                        Collateral
                        <br/>
                        <small> Collateral Assets</small>
                    </h4>
                    <fieldset class="overflow-auto">
                        <button class="btn btn-sm btn-primary m-2" type="button" data-toggle="modal"
                                data-target="#addCollateralModal"><i class="fas fa-plus text-white mr-1"></i> Add
                        </button>
                        <div class="table-responsive table-bordered">
                            <table class="table">
                                <thead>
                                <tr class="bg-gray">
                                    <th>Type</th>
                                    <th>Value</th>
                                    <th>Description</th>
                                    <th>Remove</th>
                                </tr>
                                </thead>
                                <tbody id="collateralTableBody">
                                </tbody>
                            </table>
                        </div>
                    </fieldset>

                    <!-- Guarantors -->
                    <h4>
                        Guarantors
                        <br/>
                        <small> Client's guarantors</small>
                    </h4>
                    <fieldset class="overflow-auto">
                        <button class="btn btn-sm btn-primary m-2" type="button" data-toggle="modal"
                                data-target="#addGuarantorModal"><i class="fas fa-plus text-white mr-1"></i> Add
                        </button>
                        <div class="table-responsive table-bordered">
                            <table class="table">
                                <thead>
                                <tr class="bg-gray">
                                    <th>Name</th>
                                    <th>Guarantor type</th>
                                    <th>Relationship</th>
                                    <th>Remove</th>
                                </tr>
                                </thead>
                                <tbody id="existingClientTable">
                                </tbody>
                            </table>
                        </div>
                    </fieldset>
                    <h4>
                        Repayment Schedule
                        <br/>
                        <small> Loan payment installments</small>
                    </h4>
                    <fieldset class="overflow-auto">
                    </fieldset>
                    <h4>
                        Summary
                        <br/>
                        <small> Verify Loan information</small>
                    </h4>
                    <fieldset class="overflow-auto">
                        <button class="btn btn-sm btn-primary" type="submit">Submit Application</button>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('styles')@endsection
@section('scripts')
    <script src="{{ asset('angle/js/wizard.js') }}"></script>
    <script src="{{ asset('angle/js/forms.js') }}"></script>

    <script>

        $('#addGuarantorModal').on('hidden.bs.modal', function (e) {
            console.log('Guarantor closed');
        });
        var clientsList = [];
        $('#addGuarantorModal').on('shown.bs.modal', function (e) {
            console.log('Guarantor Opened');


        });
// fetch all clients from request
        var result =  fetch('{{route('client.list')}}');
        result.then(function (result) {
            return result.json();
        }).then(function (clients) {

            clients['clients'].forEach(function (client){
                clientsList.push(client['id']+' '+client['profile']['first_name']+' '+client['profile']['middle_name']+' '+client['profile']['last_name'])
            });
            console.log(clientsList);
        }).catch (function (error) {
            console.log(error);
            return {'error':error};
        });

        // End fetching clients

        //load data to auto complete function
        autoComplete(document.getElementById("existingClientName"), clientsList);

        // Append guarantor row in a table body
        function  addGuarantorToTable( name,type,relationship) {
            var row =  '<tr>'  +
                ' <td> <input type="text" value="'+name+'" name="guarantor_name" readonly  hidden> '+name+' </td>'+
                '<td> <input type="text" value="'+type+'" name="guarantor_type" readonly hidden> '+type+' </td>'+
                '<td>  <input type="text" value="'+relationship+'" name="guarantor_relationship" readonly hidden> '+relationship+' </td>'+
                '<td> <em class="icon-close" onclick="removeTableRow(this);"> </em> </td>'+
                '</tr>';

            $('#existingClientTable').append(row);
        }
// end add guarantor table row

        // populates guarantor info to a table
        function addExistingGuarantorToTable () {
            var name = $('#existingClientName').val();
            var relationship = $('#existingClientRelationship').val();
            addGuarantorToTable(name,'Existing Client',relationship);
        }
        // end populating guarantor to the table

        // remove the row from the table
        function  removeTableRow(element) {
            $(element).parents("tr").remove()
            //element.parents("tr").remove();

        }


        // Collateral

        // Append collateral row in a table body
        function  addCollateralToTable( type,value,description) {
            var row =  '<tr>'  +
                ' <td> <input type="text" value="'+type+'" name="collateral_type" readonly  hidden> '+type+' </td>'+
                '<td> <input type="text" value="'+value+'" name="collateral_value" readonly hidden> '+value+' </td>'+
                '<td>  <input type="text" value="'+description+'" name="collateral_description" readonly hidden> '+description+' </td>'+
                '<td> <em class="icon-close" onclick="removeTableRow(this);"> </em> </td>'+
                '</tr>';

            $('#collateralTableBody').append(row);
        }
        // end add guarantor table row

        function addCollateralModalButton() {
            var type=$('#collateralModalType').val();
            var value=$('#collateralModalValue').val();
            var description = $('#collateralModalDescription').val();

            addCollateralToTable(type,value,description);

        }

        // End of Collateral

        // Charges

        function addChargesToTable() {
            var charge = $('#selectCharge').val();

            var obj = JSON.parse(charge);
            console.log(obj.amount);
            var row = ''+
                    '<tr class="hidden"><input type="hidden" name="charge_id" value="'+obj.id+'"></tr>'+
                '<tr>'+
                '<td >'+obj.name+'</td>'+
            '<td>'+obj.type+'</td>'+
            '<td>'+obj.amount+'</td>'+
            '<td>'+obj.collected_on+'</td>'+
            '<td>'+obj.date+'</td>'+
            '<td>'+obj.payment_mode+'</td>'+
            '</tr>';
            $('#chargesTableBody').append(row);
        }

        // End charges

        // add suggestions to client input



        console.log('XXXXXXXXXXXXXXXXXXX');
        console.log(document.getElementById("clientApplyForLoan"));
        document.getElementById("clientApplyForLoan").addEventListener('focus',function (event) {
            console.log('focussed ');
        });
//        $('#clientApplyForLoan').onfocus(function () {
//           console.log('Message');
//        });
        autoComplete($('#clientApplyForLoan'), clientsList);
        console.log('called');


    </script>
@endsection

<!-- Collateral modal -->
<div class="modal fade " id="addCollateralModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Collateral Asset</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="collateralModalType"> Collateral Type </label>
                        <select class="custom-select" name="collateralType" id="collateralModalType">
                            <option selected value="no"></option>
                            <option value="Fixed Asset">Fixed Asset</option>
                            <option value="Motor Vehicle">Motor Vehicle</option>
                            <option value="Electrical Appliance">Electrical Appliance</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="collateralModalValue">Value</label>
                        <input class="form-control" type="number" id="collateralModalValue" name="collateralValue">
                    </div>
                    <div class="form-group">
                        <label for="collateralModalDescription">Description</label>
                        <input class="form-control" type="text" id="collateralModalDescription" name="description">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="addCollateralModalButton();" class="btn btn-primary">Add</button>
                </div>
        </div>
    </div>
</div>
<!-- End Collateral modal -->

<!-- Guarantor modal -->
<div class="modal fade" id="addGuarantorModal" tabindex="-1" role="dialog" aria-labelledby="guarantorModelLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="guarantorModelLabel">Add Guarantor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-existing-client-tab" data-toggle="pill"
                           href="#pills-existingClient" role="tab"
                           aria-controls="pills-existingClient" aria-selected="true">Existing Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-non-client-tab" data-toggle="pill" href="#pills-non-client"
                           role="tab"
                           aria-controls="pills-non-client" aria-selected="false">Non Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-group-member-tab" data-toggle="pill" href="#pills-group-member"
                           role="tab"
                           aria-controls="pills-group-member" aria-selected="false">Group Member</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-existingClient" role="tabpanel"
                         aria-labelledby="pills-existing-client-tab">

                        <div class="form-group">
                            <div class="form-group">
                                <label for="existingClientName">Client</label>
                                <div class="autocomplete">
                                    <input id="existingClientName" class="form-control" type="text" name="client">
                                </div>

                            </div>
                            <label for="existingClientRelationship"> Relationship </label>
                            <select class="custom-select " name="relationship" id="existingClientRelationship">
                                <option selected value=""></option>
                                <option value="Parent">Parent</option>
                                <option value="Spouse">Spouse</option>
                                <option value="Sibling">Sibling</option>
                                <option value="Business Partner">Business Partner</option>
                                <option value="Friend">Friend</option>
                            </select>
                        </div>
                        <button id="addGuarantorModalButton" class="btn btn-sm btn-primary"
                                onclick="addExistingGuarantorToTable();" type="button">Add
                        </button>

                    </div>
                    <div class="tab-pane fade" id="pills-non-client" role="tabpanel"
                         aria-labelledby="pills-non-client-tab">

                            <div class="form-group">
                                <label for="relationship"> Relationship </label>
                                <select class="custom-select " name="relationship" id="relationship">
                                    <option selected value=""></option>
                                    <option value="">Parent</option>
                                    <option value="">Spouse</option>
                                    <option value="">Sibling</option>
                                    <option value="">Business Partner</option>
                                    <option value="">Friend</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input class="form-control" type="text" id="firstName" name="firstName">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input class="form-control" type="text" id="lastName" name="lastName">
                            </div>
                            <div class="form-group">
                                <label for="dateOfBirth">Date of Birth</label>
                                <input class="form-control" type="date" id="dateOfBirth" name="dateOfBirth">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input class="form-control" type="text" id="address" name="address">
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input class="form-control" type="text" id="city" name="city">
                            </div>
                            <div class="form-group">
                                <label for="state">State</label>
                                <input class="form-control" type="text" id="state" name="state">
                            </div>
                            <div class="form-group">
                                <label for="postalCode">Postal code</label>
                                <input class="form-control" type="text" id="postalCode" name="postalCode">
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input class="form-control" type="text" id="country" name="country">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input class="form-control" type="tel" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="comment">Comment</label>
                                <input class="form-control" type="text" id="comment" name="comment">
                            </div>
                            <button class="btn btn-sm btn-primary" type="submit">Add</button>

                    </div>
                    <div class="tab-pane fade" id="pills-group-member" role="tabpanel"
                         aria-labelledby="pills-group-member-tab">
                        Group Member
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button"  class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>

        </div>
    </div>
</div>

<!-- End Guarantor model -->