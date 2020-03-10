@extends('layouts.app')
@section('content')
    <div class="content-heading">
        <div>
        Calculator
        </div>
    </div>

    <fieldset>
        <div class="form-group row">

            <div class="col-md-10">
                <div class="form-row">
                    <div class="col-lg-4 mb-3">
                        <div class="form-group">
                            <label>Currency</label>
                            <select name="accounttype" class="form-control" id="accounttype">
                                <option >Select</option>
                                <option></option>
                                <option></option>
                                <option> </option>
                            </select>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <div class="form-group">
                            <label>Loan Ammount</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">

                            <label>Loan Term</label>
                            <input type="text" class="form-control" required>

                    </div>
                </div>

                <div class="col-lg-3 mb-3">
                    <label for="validation">Repayment Frequency</label>
                    <input class="form-control" id="validation" type="text" placeholder="1" required="" />

                </div>
                <div class="col-lg-3 mb-3">

                    <label>.</label>
                    <select name="accounttype" class="form-control" id="accounttype">
                        <option >Month</option>
                        <option>Week</option>
                        <option>Day</option>
                        <option>Year </option>
                    </select>
            </div>
                </div>

                <div class="form-group">
                <div class="col-lg-3 mb-3">
                    <label for="validation">Rate</label>
                    <input class="form-control " id="validation" type="text" placeholder="%" required="" />
                </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-3 mb-3">
                        <label for="validation">Expected Date</label>
                        <input class="form-control " id="validation" type="date" placeholder="%" required="" />
                    </div>
                    </div>
                <div class="form-group">

                <button class="btn btn-primary" type="submit"><em class="fa mr-2 fas fa-arrow-right"></em>Calculate</button>
            </div>
        
    </fieldset>
    @endsection
    @section('styles')@endsection
    @section('scripts')

    @endsection
