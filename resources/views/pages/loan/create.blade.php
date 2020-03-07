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
        <div class="card-header">Basic Vertical Example</div>
        <div class="card-body">
            <form id="example-form" action="">
                <div >
                    <h4>
                        Terms
                        <br />
                        <small> Loan Basic Terms </small>
                    </h4>
                    <fieldset class="overflow-auto">
                        <div class="form-group">
                            <label for="client"> Client </label>
                            <input name="client" id="client" class="form-control" type="text" placeholder="Individual / Group" />
                        </div>
                        <div class="form-group">
                            <label class="custom-control-label" for="loanType">Loan Type</label>
                            <select class="custom-select form-control" name="loanType" id="loanType">
                                <option selected value="no" >Normal</option>
                                <option value="yes">Flat rate</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="custom-control-label" for="topUp">Top up</label>
                            <select class="custom-select form-control" name="topUp" id="topUp">
                                <option selected value="no" >No</option>
                                <option value="yes">Yes</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Loan Size</label>
                            <div class=" input-group ">
                                <input class="form-control" type="number" placeholder="Loan size" aria-label="Loan size" aria-describedby="basic-addon2" />
                                <div class="input-group-append"><span class="input-group-text" id="basic-addon2">TZS</span></div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="fundingOrigin">Origin of Funding</label>
                            <input name="fundingOrigin" id="fundingOrigin" class="form-control" type="text" placeholder="Funding origin" />
                        </div>

                    </fieldset>
                    <h4>Effects</h4>
                    <fieldset>
                        <p>Wonderful transition effects.</p>
                    </fieldset>
                    <h4>Pager</h4>
                    <fieldset>
                        <p>The next and previous buttons help you to navigate through your content.</p>
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
