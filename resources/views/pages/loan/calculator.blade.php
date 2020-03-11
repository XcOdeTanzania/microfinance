@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
        Calculator
        </div>
    </div>

    <fieldset>
        <div class="form-group row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-2">

                        <div class="form-group">
                            <label for="product"><b>Product</b></label>
                            <select name="accounttag" class="form-control" id="accountag">
                                <option >Select </option>
                                <option></option>
                                <option> </option>
                                <option> </option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-4 mb-2">
                        <span class="form-text"><b>Loan Term</b></span>
                        <input class="form-control" type="text"  placeholder="" />

                    </div>
                    <div class="col-md-4 mb-2">
                    </div>

                    <div class="col-md-6 mb-2">
                        <span class="form-text"><b>Loan Ammount</b></span>
                        <input class="form-control" type="text"  placeholder="" />

                    </div><br><br>
                    <div class="col-md-4 mb-2">
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <span class="form-text"><b>Loan Term</b></span>
                            <select name="accounttag" class="form-control" id="accountag">
                                <option >Select </option>
                                <option></option>
                                <option> </option>
                                <option> </option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-4 mb-2">
                        <span class="form-text">.<b></b></span>
                        <div class="form-group">
                            <select name="accounttag" class="form-control" id="accountag">
                                <option >Select </option>
                                <option></option>
                                <option> </option>
                                <option> </option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-4 mb-2">
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="form-group">
                            <span class="form-text"><b>Repayment Frequency </b></span>
                            <input class="form-control" type="text"  placeholder="month" />
                        </div>

                    </div>
                    <div class="col-md-4 mb-2">
                        <span class="form-text">.<b></b></span>
                        <div class="form-group">
                            <select name="accounttag" class="form-control" id="accountag">
                                <option >Select </option>
                                <option></option>
                                <option> </option>
                                <option> </option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-6 mb-3">
                    </div>
                    <div class="col-md-6 mb-3">
                    </div>
                    <div class="col-md-4 mb-2">
                        <span class="form-text"><b>Date Expected</b></span>
                        <input class="form-control" type="date"  placeholder="" />

                    </div><br>
                </div>
                <button class="btn btn-primary"><i class="fas fa-arrow-left">&nbsp; Calculate</i></button>
                <br>
            </div>
        </div>
    </fieldset>
    @endsection
    @section('styles')@endsection
    @section('scripts')

    @endsection
