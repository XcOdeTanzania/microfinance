@extends('layouts.app')
@section('content')
    <div class="content-heading">Register Client</div>
    <div class="card card-default">
        <div class="card-header"></div>
        <div class="card-body">
            <form id="example-form" action="#">
                <div>
                    <h4>
                        Client Information
                        <br />
                        <small>Basic Client Information</small>
                    </h4>
                    <fieldset>

                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-8 col-sm  align-content-center">
                                <label for="firstName">First Name *</label>
                                <input class="form-control required" id="firstName" name="firstName" type="text" />
                                <label for="middleName">Middle Name *</label>
                                <input class="form-control required" id="middleName" name=middleName" type="text" />
                                <label for="lastName">Last Name *</label>
                                <input class="form-control required" id="lastName" name="lastName" type="text" />
                                <label for="userName">Registration Date *</label>
                                <input class="form-control required" id="registrationDate" name="registrationDate" type="date" />
                                <label for="phone">Phone Number *</label>
                                <input class="form-control required" id="phone" name="phone" type="text" />
                                <label for="secondaryMobileNo">Secondary Mobile Number </label>
                                <input class="form-control " id="secondaryMobileNo" name="secondaryMobileNo" type="text" />
                                <label for="phone">Email Address </label>
                                <input class="form-control " id="phone" name="phone" type="text" />
                                <label for="dateOfBirth">Date of Birth </label>
                                <input class="form-control " id="dateOfBirth" name="dateOfBirth" type="date" />
                                <label for="registrationDate">Gender  *</label>
                                <input class="form-control required" id="registrationDate" name="registrationDate" type="text" />
                                <label for="tags">Tags </label>
                                <input class="form-control " id="tags" name="tags" type="text" />
                                <label for="town">Town </label>
                                <input class="form-control " id="town" name="town" type="text" />
                                <label for="address">Address </label>
                                <input class="form-control " id="address" name="address" type="text" />
                                <label for="maritalStatus">Marital Status </label>
                                <input class="form-control " id="maritalStatus" name="maritalStatus" type="text" />
                                <label for="region">Region </label>
                                <input class="form-control " id="region" name="region" type="text" />
                                <label for="gpsLocation">gps_location </label>
                                <input class="form-control " id="gpsLocation" name="gpsLocation" type="text" />

                            </div>
                        </div>



                        <p>(*) Mandatory</p>
                    </fieldset>
                    <h4>
                        Profile
                        <br />
                        <small>Nam egestas, leo eu gravida tincidunt</small>
                    </h4>
                    <fieldset>
                        <label for="name">First name *</label>
                        <input class="form-control required" id="name" name="name" type="text" />
                        <label for="surname">Last name *</label>
                        <input class="form-control required" id="surname" name="surname" type="text" />
                        <label for="email">Email *</label>
                        <input class="form-control required" id="email" name="email" type="text" />
                        <label for="address">Address</label>
                        <input class="form-control" id="address" name="address" type="text" />
                        <p>(*) Mandatory</p>
                    </fieldset>
                    <h4>
                        Hints
                        <br />
                        <small>Nam egestas, leo eu gravida tincidunt</small>
                    </h4>
                    <fieldset>
                        <p class="lead text-center">Almost there!</p>
                    </fieldset>
                    <h4>
                        Finish
                        <br />
                        <small>Nam egestas, leo eu gravida tincidunt</small>
                    </h4>
                    <fieldset>
                        <p class="lead">One last check</p>
                        <div class="checkbox c-checkbox">
                            <label>
                                <input type="checkbox" required="required" name="terms" />
                                <span class="fa fa-check"></span>
                                I agree with the Terms and Conditions.
                            </label>
                        </div>
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

