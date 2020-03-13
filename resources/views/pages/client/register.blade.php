@extends('layouts.app')
@section('content')


    <div class="content-heading ">Register Client</div>
    <div class="card card-default">
        <div class="card-header"></div>
        <div class="card-body ">
            <form id="example-form" action="#">
            
                <div>
                    <h4>
                        Client Information
                        <br/>
                        <small>Basic Client Information</small>
                    </h4>

                    <fieldset class="overflow-auto">
                        <div class="col">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-md-6 col-sm  align-content-center">
                                    <label for="firstName">First Name *</label>
                                    <input class="form-control required" id="firstName" name="firstName" type="text"/>
                                    <label for="middleName">Middle Name </label>
                                    <input class="form-control " id="middleName" name="middleName" type="text"/>
                                    <label for="lastName">Last Name *</label>
                                    <input class="form-control required" id="lastName" name="lastName" type="text"/>
                                    <label for="registrationDate">Registration Date *</label>
                                    <input class="form-control required" id="registrationDate" name="registrationDate"
                                           type="date"/>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm  align-content-center">
                                    <label for="phone">Phone Number *</label>
                                    <input class="form-control required " id="phone" name="phone" type="text"/>
                                    <label for="secondaryMobileNo">Secondary Mobile Number </label>
                                    <input class="form-control " id="secondaryMobileNo" name="secondaryMobileNo"
                                           type="text"/>
                                    <label for="email">Email Address *</label>
                                    <input class="form-control required " id="email" name="email" type="text"/>
                                    <label for="dateOfBirth">Date of Birth *</label>
                                    <input class="form-control required " require id="dateOfBirth" name="dateOfBirth" type="date"/>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm  align-content-center">
                                    <label for="gender">Gender *</label>
                                    <select class="custom-select required" id="gender" name="gender">
                                        <option selected></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    {{--<input class="form-control required" id="registrationDate" name="registrationDate" type="text" />--}}
                                    <label for="tags">Tags </label>
                                    <input class="form-control " id="tags" name="tags" type="text"/>
                                    <label for="town">Town *</label>
                                    <input class="form-control required" id="town" name="town" type="text"/>
                                    <label for="address">Postal Address </label>
                                    <input class="form-control " id="address" name="address" type="text"/>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm  align-content-center">
                                    <label for="maritalStatus">Marital Status *</label>
                                    <select class="custom-select required " id="maritalStatus" name="maritalStatus">
                                        <option selected></option>
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                        <option value="divorced">Divorced</option>
                                    </select>

                                    <label for="region">Region *</label>
                                    <select class="custom-select required " id="region" name="region">
                                        <option selected></option>
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                        <option value="divorced">Divorced</option>
                                    </select>

                                    <label for="district">District *</label>
                                    <select class="custom-select required " id="district" name="district">
                                        <option selected></option>
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                        <option value="divorced">Divorced</option>
                                    </select>
                                   <label for="gpsLocation">gps_location </label>
                                    <input class="form-control " id="gpsLocation" name="gpsLocation" type="text"/>

                                </div>
                            </div>


                            <p>(*) Mandatory</p>
                        </div>

                    </fieldset>

                    <h4>
                        Client Identification
                        <br/>
                        <small> Identification</small>
                    </h4>
                    <fieldset class="overflow-auto">
                        <button class="btn btn-labeled btn-info mb-2" data-toggle="modal"
                                data-target="#addIdentityModal" type="button">
                            <span class="btn-label"><i class="fa fa-plus"></i></span>
                            Add
                        </button>

                        <div class="table-responsive table-bordered">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Document Type</th>
                                    <th> Unique Identification</th>
                                    <th>Description</th>
                                    <th> Attachment</th>
                                    <th>Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>National ID</td>
                                    <td>01012000</td>
                                    <td>National Identity card</td>
                                    <td>
                                        <div class="form-group">
                                            <input
                                                    class="form-control filestyle"
                                                    type="file"
                                                    data-classbutton="btn btn-secondary"
                                                    data-classinput="form-control inline"
                                                    data-icon="&lt;span class='fa fa-upload mr-2'&gt;&lt;/span&gt;"
                                            />
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fas fa-trash-alt text-danger align-self-center"></i>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </fieldset>
                    <h4>
                        Business Details
                        <br/>
                        <small>Business Infomation</small>
                    </h4>
                    <fieldset class="overflow-auto">
                        <div class="col">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6 col-sm  align-content-center">
                                    <label for="businessName">Business Name *</label>
                                    <input class="form-control required" id="businessName" name="businessName" type="text"/>
                                    <label for="businessType">Business Type *</label>
                                    <select class="custom-select " required id="businessType" name="businessType">
                                        <option selected></option>
                                        <option value="trader">Trader</option>
                                        <option value="tinker">Tinker</option>
                                        <option value="tailor">Tailor</option>
                                        <option value="farmer">Farmer</option>
                                        <option value="agent">Agent</option>
                                    </select>
                                    <label for="businessDate">Business Date *</label>
                                    <input class="form-control required" id="businessDate" name="businessDate"
                                           type="date"/>
                                    <label for="businessAddress">Address *</label>
                                    <input class="form-control required" id="businessAddress" name="businessAddress" type="text"/>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm  align-content-center">
                                    <label for="businessRegion">Region  *</label>
                                    <input class="form-control required" id="businessRegion" name="businessRegion" type="text"/>
                                    <label for="businessCountry">Country *</label>
                                    <input class="form-control required" id="businessCountry" name="businessCountry" type="text"/>
                                    <label for="businessPostalCode">Postal Code  *</label>
                                    <input class="form-control required" id="businessPostalCode" name="businessPostalCode" type="text"/>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm  align-content-center">
                                    <label for="businessRevenue">Business Revenue *</label>
                                    <input class="form-control required" id="businessRevenue" name="businessRevenue" type="text"/>
                                    <label for="businessExpenses">Expenses *</label>
                                    <input class="form-control required" id="businessExpenses" name="businessExpenses" type="text"/>
                                    <label for="businessNetIncome">Net Income *</label>
                                    <input class="form-control required" id="businessNetIncome" name="businessNetIncome" type="text"/>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <h4>
                        Next of Kin
                        <br/>
                        <small>Clients Next of Kin</small>
                    </h4>
                    <fieldset class="overflow-auto">
                        <div class="table-responsive table-bordered">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th style="border-left: 1px;border-color: #1d68a7; !important; " > Date of Birth</th>
                                    <th>Address</th>
                                    <th> Region</th>
                                    <th>Phone Number</th>
                                    <th>Relationship </th>
                                    <th> Remove </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td>01/01/2000</td>
                                    <td> P.O. Box 6112 DSM</td>
                                    <td>Dar es Salaam</td>
                                    <td>Parent</td>

                                    <td>
                                        <div class="form-group">
                                            <input
                                                    class="form-control filestyle"
                                                    type="file"
                                                    data-classbutton="btn btn-secondary"
                                                    data-classinput="form-control inline"
                                                    data-icon="&lt;span class='fa fa-upload mr-2'&gt;&lt;/span&gt;"
                                            />
                                        </div>
                                    </td>
                                    <td>
                                        <i class="fas fa-trash-alt text-danger align-self-center"></i>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </fieldset>
                    <h4>
                        Finish
                        <br/>
                        <small>Nam egestas, leo eu gravida tincidunt</small>
                    </h4>
                    <fieldset>
                        <p class="lead">One last check</p>
                        <div class="checkbox c-checkbox">
                            <label>
                                <input type="checkbox" required="required" name="terms"/>
                                <span class="fa fa-check"></span>
                                I agree with the Terms and Conditions.
                            </label>
                        </div>
                        <button class="button button-success " type="submit">
                            Save
                        </button>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('styles')@endsection
@section('scripts')
    <script src="{{ asset('angle/js/wizard.js') }}"></script>
@endsection

<div class="modal fade" id="addIdentityModal" tabindex="-1" role="dialog" aria-labelledby="addIdentityModal"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Identification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="maritalStatus">Document Type *</label>
                        <select class="custom-select " required id="maritalStatus" name="maritalStatus">
                            <option selected></option>
                            <option value="single">National Id</option>
                            <option value="married">Voters Card</option>
                            <option value="divorced">Other Id</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="uniqueId">Unique Identification</label>
                        <input id="uniqueId" class="form-control" type="text" name="uniqueId"/>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input id="description" class="form-control" type="text" name="description"/>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" >Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
